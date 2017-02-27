<?php

class numbers_countries_countries_model_postal_codes extends object_table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'CM';
	public $title = 'C/M Postal Codes';
	public $name = 'cm_postal_codes';
	public $pk = ['cm_postal_tenant_id', 'cm_postal_country_code', 'cm_postal_postal_code'];
	public $tenant = true;
	public $orderby;
	public $limit;
	public $column_prefix = 'cm_postal_';
	public $columns = [
		'cm_postal_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'cm_postal_country_code' => ['name' => 'Country Code', 'domain' => 'country_code'],
		'cm_postal_province_code' => ['name' => 'Province Code', 'domain' => 'province_code'],
		'cm_postal_postal_code' => ['name' => 'Postal Code', 'domain' => 'postal_code'],
		'cm_postal_city' => ['name' => 'City', 'domain' => 'name'],
		'cm_postal_latitude' => ['name' => 'Latitude', 'domain' => 'geo_coordinate', 'null' => false],
		'cm_postal_longitude' => ['name' => 'Longitude', 'domain' => 'geo_coordinate', 'null' => false],
		'cm_postal_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'cm_country_postal_codes_pk' => ['type' => 'pk', 'columns' => ['cm_postal_tenant_id', 'cm_postal_country_code', 'cm_postal_postal_code']],
		'cm_postal_province_code_fk' => [
			'type' => 'fk',
			'columns' => ['cm_postal_tenant_id', 'cm_postal_country_code', 'cm_postal_province_code'],
			'foreign_model' => 'numbers_countries_countries_model_provinces',
			'foreign_columns' => ['cm_province_tenant_id', 'cm_province_country_code', 'cm_province_province_code'],
			'options' => [
				'match' => 'simple',
				'update' => 'no action',
				'delete' => 'no action'
			]
		]
	];
	public $indexes = [
		//'cm_country_postal_codes_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['cm_postal_country_code', 'cm_postal_province_code', 'cm_postal_postal_code', 'cm_postal_city']]
	];
	public $history = false;
	public $audit = false;
	public $options_map = [];
	public $options_active = [];
	public $engine = [
		'mysqli' => 'InnoDB'
	];

	public $cache = false;
	public $cache_tags = [];
	public $cache_memory = false;

	public $relation = [
		'field' => 'cm_postal_relation_id',
	];

	public $data_asset = [
		'classification' => 'public',
		'protection' => 0,
		'scope' => 'global'
	];
}