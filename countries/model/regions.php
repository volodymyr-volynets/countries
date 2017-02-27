<?php

class numbers_countries_countries_model_regions extends object_table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'CM';
	public $title = 'C/M Regions';
	public $name = 'cm_regions';
	public $pk = ['cm_region_id'];
	public $tenant = true;
	public $orderby;
	public $limit;
	public $column_prefix = 'cm_region_';
	public $columns = [
		'cm_region_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'cm_region_id' => ['name' => 'Region #', 'domain' => 'country_number'],
		'cm_region_name' => ['name' => 'Name', 'domain' => 'name'],
		'cm_region_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'cm_country_regions_pk' => ['type' => 'pk', 'columns' => ['cm_region_tenant_id', 'cm_region_id']]
	];
	public $indexes = [
		'cm_country_regions_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['cm_region_name']]
	];
	public $history = false;
	public $audit = false;
	public $options_map = [];
	public $options_active = [];
	public $engine = [
		'mysqli' => 'InnoDB'
	];

	public $cache = true;
	public $cache_tags = [];
	public $cache_memory = true;

	public $data_asset = [
		'classification' => 'public',
		'protection' => 0,
		'scope' => 'global'
	];
}