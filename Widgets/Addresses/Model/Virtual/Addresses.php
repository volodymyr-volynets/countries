<?php

namespace Numbers\Countries\Widgets\Addresses\Model\Virtual;
class Addresses extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $name = null;
	public $pk = [];
	public $tenant = true;
	public $orderby = [
		'wg_address_id' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'wg_address_';
	public $columns = [];
	public $constraints = [];
	public $indexes = [];
	public $history = false;
	public $audit = false; // must not change it
	public $options_map = [];
	public $options_active = [];
	public $engine = [
		'MySQLi' => 'InnoDB'
	];

	public $cache = false;
	public $cache_tags = [];
	public $cache_memory = false;

	public $attributes = true;
	public $details_pk = ['wg_address_type_code'];
	public $model_map_options = [];

	/**
	 * Constructor
	 */
	public function __construct($class, $virtual_class_name, $options = []) {
		$this->determineModelMap($class, 'addresses', $virtual_class_name, $options);
		// add regular columns
		$this->columns['wg_address_tenant_id'] = ['name' => 'Tenant #', 'domain' => 'tenant_id'];
		$this->columns['wg_address_id'] = ['name' => 'Detail #', 'domain' => 'big_id_sequence'];
		$this->columns['wg_address_type_code'] = ['name' => 'Type', 'domain' => 'type_code'];
		$this->columns['wg_address_name'] = ['name' => 'Name', 'domain' => 'name', 'null' => true];
		$this->columns['wg_address_address1'] = ['name' => 'Address Line 1', 'domain' => 'address', 'null' => true];
		$this->columns['wg_address_address2'] = ['name' => 'Address Line 2', 'domain' => 'address', 'null' => true];
		$this->columns['wg_address_city'] = ['name' => 'City', 'domain' => 'city', 'null' => true];
		$this->columns['wg_address_province_code'] = ['name' => 'Province', 'domain' => 'province_code', 'null' => true];
		$this->columns['wg_address_country_code'] = ['name' => 'Country', 'domain' => 'country_code', 'null' => true];
		$this->columns['wg_address_postal_code'] = ['name' => 'Postal Code', 'domain' => 'postal_code', 'null' => true];
		$this->columns['wg_address_phone'] = ['name' => 'Phone', 'domain' => 'phone', 'null' => true];
		$this->columns['wg_address_fax'] = ['name' => 'Fax', 'domain' => 'phone', 'null' => true];
		$this->columns['wg_address_email'] = ['name' => 'Email', 'domain' => 'email', 'null' => true];
		$this->columns['wg_address_primary'] = ['name' => 'Primary', 'type' => 'boolean'];
		$this->columns['wg_address_latitude'] = ['name' => 'Latitude', 'domain' => 'geo_coordinate', 'null' => true];
		$this->columns['wg_address_longitude'] = ['name' => 'Longitude', 'domain' => 'geo_coordinate', 'null' => true];
		$this->columns['wg_address_instructions'] = ['name' => 'Instructions', 'domain' => 'description', 'null' => true];
		$this->columns['wg_address_inactive'] = ['name' => 'Inactive', 'type' => 'boolean'];
		$this->pk = array_merge(array_values($this->map), $this->details_pk);
		// add constraints
		$this->constraints[$this->name . '_pk'] = [
			'type' => 'pk',
			'columns' => $this->pk
		];
		$this->constraints[$this->name . '_primary_un'] = [
			'type' => 'unique',
			'columns' => array_merge(array_values($this->map), ['wg_address_primary'])
		];
		$this->constraints[$this->name . '_parent_fk'] = [
			'type' => 'fk',
			'columns' => array_values($this->map),
			'foreign_model' => $class,
			'foreign_columns' => array_keys($this->map)
		];
		$this->constraints[$this->name . '_type_code_fk'] = [
			'type' => 'fk',
			'columns' => ['wg_address_tenant_id', 'wg_address_type_code'],
			'foreign_model' => '\Numbers\Countries\Countries\Model\Address\Types',
			'foreign_columns' => ['cm_addrtype_tenant_id', 'cm_addrtype_code']
		];
		$this->constraints[$this->name . '_country_code_fk'] = [
			'type' => 'fk',
			'columns' => ['wg_address_tenant_id', 'wg_address_country_code'],
			'foreign_model' => '\Numbers\Countries\Countries\Model\Countries',
			'foreign_columns' => ['cm_country_tenant_id', 'cm_country_code']
		];
		$this->constraints[$this->name . '_province_code_fk'] = [
			'type' => 'fk',
			'columns' => ['wg_address_tenant_id', 'wg_address_country_code', 'wg_address_province_code'],
			'foreign_model' => '\Numbers\Countries\Countries\Model\Provinces',
			'foreign_columns' => ['cm_province_tenant_id', 'cm_province_country_code', 'cm_province_province_code']
		];
		$this->indexes[$this->name . '_parent_idx'] = ['type' => 'btree', 'columns' => array_values($this->map)];
		// construct table
		parent::__construct($options);
		// we need to fix attribute model
		if (!empty($this->attributes)) {
			$this->attributes = [
				'map' => []
			];
			foreach ($this->map as $k => $v) {
				$this->attributes['map'][$v] = str_replace('wg_address_', 'wg_attribute_', $v);
			}
			foreach ($this->details_pk as $k => $v) {
				$this->attributes['map'][$v] = str_replace('wg_address_', 'wg_attribute_', $v);
			}
			$this->attributes_model = $class . '\0Virtual0\Widgets\Addresses\0Virtual0\Widgets\Attributes';
		}
	}

	/**
	 * Process widget (form)
	 *
	 * @param object $form
	 * @param array $options
	 */
	public function formProcessWidget(& $form, $options) {
		\Layout::addJs('/numbers/media_submodules/Numbers_Countries_Widgets_Addresses_Media_JS_DecodePostalCode.js');
		// create a container
		$new_container_link = ($options['container_link'] ?? '') . '_' . ($options['row_link'] ?? '') . '__container';
		// collection key
		if (!empty($options['details_parent_key'])) {
			$details_collection_key = ['details', $options['details_parent_key'], 'details', $this->virtual_class_name];
			$type = 'subdetails';
			$attributes = false;
			$new_container_link = ($options['container_link'] ?? '') . '_' . ($options['row_link'] ?? '') . '__container';
		} else {
			$details_collection_key = ['details', $this->virtual_class_name];
			$type = 'details';
			$attributes = true;
		}
		$form->container($new_container_link, [
			'type' => $type,
			'label_name' => $options['label_name'] ?? '',
			'details_rendering_type' => $options['details_rendering_type'] ?? 'grid_with_label',
			'details_new_rows' => $options['details_new_rows'] ?? 1,
			'details_max_rows' => $options['details_max_rows'] ?? null,
			'details_parent_key' => $options['details_parent_key'] ?? null,
			'details_key' => $this->virtual_class_name,
			'details_pk' => $this->details_pk,
			'pk' => $this->pk,
			//'details_collection_key' => $details_collection_key,
			'details_process_widget_data' => method_exists($this, 'formProcessWidgetData'),
			'details_convert_multiple_columns' => method_exists($this, 'convertMultipleColumns'),
			'order' => $options['order'] ?? 35000,
			'required' => $options['required'] ?? false
		]);
		// get global settings
		$global_options = \Application::get('flag.global.widgets.addresses.options');
		// add elements
		$elements = [
			'row1' => [
				'wg_address_type_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Address Type', 'domain' => 'type_code', 'null' => true, 'percent' => 30, 'required' => true, 'persistent' => true, 'details_unique_select' => true, 'method' => 'select', 'options_model' => '\Numbers\Countries\Countries\Model\Address\Types::optionsActive', 'onchange' => 'this.form.submit();'],
				'wg_address_name' => ['order' => 2, 'label_name' => 'Name', 'domain' => 'name', 'null' => true, 'percent' => 50],
				'wg_address_primary' => ['order' => 3, 'label_name' => 'Primary', 'type' => 'boolean', 'percent' => 15],
				'wg_address_inactive' => ['order' => 4, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'row2' => [
				'wg_address_address1' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Address Line 1', 'domain' => 'address', 'null' => true, 'percent' => 50, 'required' => true],
				'wg_address_address2' => ['order' => 2, 'label_name' => 'Address Line 2', 'domain' => 'address', 'null' => true, 'percent' => 50]
			],
			'row3' => [
				'wg_address_city' => ['order' => 1, 'row_order' => 300, 'label_name' => 'City', 'domain' => 'city', 'null' => true, 'percent' => 50],
				'wg_address_postal_code' => ['order' => 2, 'label_name' => 'Postal Code', 'domain' => 'postal_code', 'null' => true, 'percent' => 25],
				'__decode' => ['order' => 3, 'label_name' => ' ', 'method' => 'button2', 'value' => 'Decode', 'icon' => 'far fa-handshake', 'onclick' => 'numbers_widgets_addresses_decode_postal_code(this); return false;']
			],
			'row4' => [
				'wg_address_country_code' => ['order' => 1, 'row_order' => 400, 'label_name' => 'Country', 'domain' => 'country_code', 'null' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Countries\Countries\Model\Countries::optionsActive', 'onchange' => 'this.form.submit();'],
				'wg_address_province_code' => ['order' => 2, 'label_name' => 'Province', 'domain' => 'province_code', 'null' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Countries\Countries\Model\Provinces::optionsActive', 'options_depends' => ['cm_province_country_code' => 'wg_address_country_code']]
			],
			'row5' => [
				'wg_address_phone' => ['order' => 1, 'row_order' => 500, 'label_name' => 'Phone', 'domain' => 'phone', 'null' => true, 'percent' => 50],
				'wg_address_fax' => ['order' => 2, 'label_name' => 'Fax', 'domain' => 'phone', 'null' => true, 'percent' => 50]
			]
		];
		// skip email
		if (!empty($this->model_map_options['skip_email'])) {
			$elements[$form::HIDDEN] = [
				'wg_address_email' => ['order' => 1, 'row_order' => 600, 'label_name' => 'Email', 'domain' => 'email', 'null' => true, 'method' => 'hidden']
			];
		} else {
			$elements['row6'] = [
				'wg_address_email' => ['order' => 1, 'row_order' => 600, 'label_name' => 'Email', 'domain' => 'email', 'null' => true, 'percent' => 100]
			];
		}
		// skip coordinates
		if (!empty($this->model_map_options['skip_coordinates'])) {
			$elements[$form::HIDDEN] = [
				'wg_address_latitude' => ['order' => 1, 'row_order' => 700, 'label_name' => 'Latitude', 'domain' => 'geo_coordinate', 'null' => true, 'method' => 'hidden'],
				'wg_address_longitude' => ['order' => 2, 'label_name' => 'Longitude', 'domain' => 'geo_coordinate', 'null' => true, 'method' => 'hidden'],
			];
		} else {
			$elements['row7'] = [
				'wg_address_latitude' => ['order' => 1, 'row_order' => 700, 'label_name' => 'Latitude', 'domain' => 'geo_coordinate', 'null' => true, 'required' => 'c'],
				'wg_address_longitude' => ['order' => 2, 'label_name' => 'Longitude', 'domain' => 'geo_coordinate', 'null' => true, 'required' => 'c'],
			];
		}
		// instructions
		if (!empty($this->model_map_options['show_instructions'])) {
			$elements['row8'] = [
				'wg_address_instructions' => ['order' => 1, 'row_order' => 800, 'label_name' => 'Shipping Instructions', 'domain' => 'description', 'null' => true, 'percent' => 100, 'method' => 'textarea', 'rows' => 3]
			];
		}
		// add elements to the form
		foreach ($elements as $k => $v) {
			foreach ($v as $k2 => $v2) {
				// handle field settings
				if (!empty($global_options['fields'][$k2])) {
					$v2 = array_merge_hard($v2, $global_options['fields'][$k2]);
				}
				$form->element($new_container_link, $k, $k2, $v2);
			}
		}
		// link containers
		if ($options['type'] == 'tabs') {
			$form->element($options['container_link'], $options['row_link'], $options['row_link'], ['container' => $new_container_link, 'order' => 1]);
		}
		// collection
		array_key_set($form->collection, $details_collection_key, [
			'name' => 'Addresses',
			'pk' => $this->pk,
			'type' => '1M',
			'map' => $this->map,
			'addresses' => true
		]);
		$form->updateCollectionObject();
		// validate
		$form->wrapper_methods['validate']['addresses_widget'] = [$this, 'validate'];
		// attributes
		if ($this->attributes && $attributes) {
			$form->container($new_container_link . '__attributes', [
				'widget' => 'detail_attributes',
				'type' => 'subdetails',
				'label_name' => 'Attributes',
				'details_rendering_type' => 'table',
				'details_new_rows' => 1,
				'details_parent_key' => $this->virtual_class_name,
				'details_key' => $this->attributes_model,
				'details_pk' => ['wg_attribute_attribute_id'],
				'order' => PHP_INT_MAX - 1000,
				'required' => false
			]);
		}
		return true;
	}

	public function validate(& $form) {
		// we need to decode
		if (isset($form->values['\Numbers\Users\Users\Model\Users\0Virtual0\Widgets\Addresses'])) {
			foreach ($form->values['\Numbers\Users\Users\Model\Users\0Virtual0\Widgets\Addresses'] as $k => $v) {
				if (empty($v['wg_address_latitude']) && empty($v['wg_address_longitude'])) {
					$temp = \Numbers\Countries\Countries\Helper\PostalCode::decodePostalCode($v['wg_address_country_code'], $v['wg_address_postal_code']);
					if ($temp['success']) {
						$form->values['\Numbers\Users\Users\Model\Users\0Virtual0\Widgets\Addresses'][$k]['wg_address_latitude'] = $temp['latitude'];
						$form->values['\Numbers\Users\Users\Model\Users\0Virtual0\Widgets\Addresses'][$k]['wg_address_longitude'] = $temp['longitude'];
					}
				}
			}
		}
	}
}