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

class Regions extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'CM';
    public $title = 'C/M Regions';
    public $name = 'cm_regions';
    public $pk = ['cm_region_tenant_id', 'cm_region_id'];
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
        'cm_regions_pk' => ['type' => 'pk', 'columns' => ['cm_region_tenant_id', 'cm_region_id']]
    ];
    public $indexes = [
        'cm_regions_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['cm_region_name']]
    ];
    public $history = false;
    public $audit = false;
    public $options_map = [];
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
