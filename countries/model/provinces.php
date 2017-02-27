<?php

class numbers_countries_countries_model_provinces extends object_table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'CM';
	public $title = 'C/M Provinces';
	public $name = 'cm_provinces';
	public $pk = ['cm_province_tenant_id', 'cm_province_country_code', 'cm_province_province_code'];
	public $tenant = true;
	public $orderby;
	public $limit;
	public $column_prefix = 'cm_province_';
	public $columns = [
		'cm_province_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'cm_province_country_code' => ['name' => 'Country Code', 'domain' => 'country_code'],
		'cm_province_province_code' => ['name' => 'Province Code', 'domain' => 'province_code'],
		'cm_province_name' => ['name' => 'Name', 'domain' => 'name'],
		'cm_province_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'cm_country_provinces_pk' => ['type' => 'pk', 'columns' => ['cm_province_tenant_id', 'cm_province_country_code', 'cm_province_province_code']],
		'cm_province_country_code_fk' => [
			'type' => 'fk',
			'columns' => ['cm_province_tenant_id', 'cm_province_country_code'],
			'foreign_model' => 'numbers_countries_countries_model_countries',
			'foreign_columns' => ['cm_country_tenant_id', 'cm_country_code'],
		]
	];
	public $indexes = [
		'cm_country_provinces_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['cm_province_name']]
	];
	public $history = false;
	public $audit = false;
	public $options_map = [
		'cm_province_name' => 'name',
	];
	public $options_active = [];
	public $engine = [
		'mysqli' => 'InnoDB'
	];

	public $cache = true;
	public $cache_tags = [];
	public $cache_memory = true;

	public $relation = [
		'field' => 'cm_province_relation_id',
	];

	public $data_asset = [
		'classification' => 'public',
		'protection' => 0,
		'scope' => 'global'
	];
}