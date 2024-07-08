<?php

namespace Numbers\Countries\Currencies\Form;
class Online extends \Object\Form\Wrapper\Base {
	public $form_link = 'cy_online_rates';
	public $module_code = 'CY';
	public $title = 'C/Y Online Rates Form';
	public $options = [
		'segment' => self::SEGMENT_FORM,
		'actions' => [
			'refresh' => true
		]
	];
	public $containers = [
		'top' => ['default_row_type' => 'grid', 'order' => 100],
		'buttons' => ['default_row_type' => 'grid', 'order' => 200],
		'rates_container' => [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 0,
			'details_key' => '\Numbers\Countries\Currencies\Model\Rates',
			'details_pk' => ['cy_currrate_id'],
			'details_empty_warning_message' => true,
			'required' => true,
			'order' => 150
		]
	];
	public $rows = [];
	public $elements = [
		'top' => [
			'cy_currrate_provider_name' => [
				'cy_currrate_provider_name' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Provider', 'domain' => 'group_code', 'percent' => 100, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Countries\Currencies\Model\Providers', 'onchange' => 'this.form.submit();'],
			],
			'cy_currrate_source_currency_code' => [
				'cy_currrate_datetime' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Datetime', 'type' => 'datetime', 'percent' => 33, 'required' => true, 'method' => 'calendar', 'calendar_icon' => 'right', 'onchange' => 'this.form.submit();'],
				'cy_currrate_currency_type' => ['order' => 2, 'label_name' => 'Type', 'domain' => 'currency_type', 'required' => true, 'percent' => 33, 'method' => 'select', 'options_model' => '\Numbers\Countries\Currencies\Model\Types', 'onchange' => 'this.form.submit();'],
			],
			'organizations' => [
				'\Numbers\Countries\Currencies\Model\Rate\Organizations' => ['order' => 1, 'row_order' => 400, 'label_name' => 'Organizations', 'null' => true, 'required' => true, 'domain' => 'organization_id', 'multiple_column' => 'cy_curateorg_organization_id', 'percent' => 100, 'method' => 'multiselect', 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive'],
			]
		],
		'rates_container' => [
			'row1' => [
				'cy_currrate_source_currency_code' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Source Currency', 'domain' => 'currency_code', 'percent' => 33, 'required' => true, 'readonly' => true, 'method' => 'select', 'options_model' => '\Numbers\Countries\Currencies\Model\Currencies'],
				'cy_currrate_home_currency_code' => ['order' => 2, 'label_name' => 'Home Currency', 'domain' => 'currency_code', 'percent' => 33, 'required' => true, 'readonly' => true, 'method' => 'select', 'options_model' => '\Numbers\Countries\Currencies\Model\Currencies'],
				'cy_currrate_rate' => ['order' => 3, 'label_name' => 'Rate', 'domain' => 'currency_rate', 'percent' => 34, 'required' => true],
			]
		],
		'buttons' => [
			self::BUTTONS => self::BUTTONS_DATA_GROUP
		]
	];

	public function refresh(& $form) {
		/* @var $form \Object\Form\Base */
		if ($form->hasErrors()) {
			return;
		}
		if (!empty($form->values['cy_currrate_provider_name']) && !empty($form->values['cy_currrate_datetime']) && !empty($form->values['cy_currrate_currency_type'])) {
			$model = new \Numbers\Countries\Currencies\Model\Providers();
			$data = $model->get([
				'where' => [
					'cy_provider_code' => $form->values['cy_currrate_provider_name']
				],
				'single_row' => true,
				'pk' => null
			]);
			$method = \Factory::method($data['cy_provider_method'], null, true);
			$result = call_user_func_array($method, [$data['cy_provider_home_currency_code'], $form->values['cy_currrate_datetime']]);
			if ($result['success']) {
				$form->values['\Numbers\Countries\Currencies\Model\Rates'] = $result['rows'];
			} else {
				$form->error(DANGER, $result['error']);
			}
		}
	}

	public function validate(& $form) {
		/* @var $form \Object\Form\Base */
		$data = [];
		foreach ($form->values['\Numbers\Countries\Currencies\Model\Rates'] as $k => $v) {
			$v['cy_currrate_datetime'] = $form->values['cy_currrate_datetime'];
			$v['cy_currrate_currency_type'] = $form->values['cy_currrate_currency_type'];
			$v['cy_currrate_provider_name'] = $form->values['cy_currrate_provider_name'];
			$v['\Numbers\Countries\Currencies\Model\Rate\Organizations'] = $form->values['\Numbers\Countries\Currencies\Model\Rate\Organizations'];
			$data[] = $v;
		}
		$collection = new \Numbers\Countries\Currencies\Model\Collection\Rates();
		$result = $collection->mergeMultiple($data);
		if (!$result['success']) {
			$form->error(DANGER, $result['error']);
		} else {
			$form->error(SUCCESS, \Object\Content\Messages::OPERATION_EXECUTED);
		}
	}

	public function save(& $form) {
		return true;
	}
}