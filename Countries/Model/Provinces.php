<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Countries\Model;

use Object\Table;

class Provinces extends Table
{
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
        'cm_provinces_pk' => ['type' => 'pk', 'columns' => ['cm_province_tenant_id', 'cm_province_country_code', 'cm_province_province_code']],
        'cm_province_country_code_fk' => [
            'type' => 'fk',
            'columns' => ['cm_province_tenant_id', 'cm_province_country_code'],
            'foreign_model' => '\Numbers\Countries\Countries\Model\Countries',
            'foreign_columns' => ['cm_country_tenant_id', 'cm_country_code'],
        ]
    ];
    public $indexes = [
        'cm_provinces_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['cm_province_name']]
    ];
    public $history = false;
    public $audit = false;
    public $options_map = [
        'cm_province_name' => 'name',
        'cm_province_inactive' => 'inactive',
    ];
    public $options_active = [];
    public $engine = [
        'MySQLi' => 'InnoDB'
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
