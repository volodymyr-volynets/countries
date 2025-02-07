<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Countries\Model\Address;

use Object\Table;

class Types extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'CM';
    public $title = 'C/M Address Types';
    public $name = 'cm_address_types';
    public $pk = ['cm_addrtype_tenant_id', 'cm_addrtype_code'];
    public $tenant = true;
    public $orderby;
    public $limit;
    public $column_prefix = 'cm_addrtype_';
    public $columns = [
        'cm_addrtype_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'cm_addrtype_code' => ['name' => 'Code', 'domain' => 'type_code'],
        'cm_addrtype_name' => ['name' => 'Name', 'domain' => 'name'],
        'cm_addrtype_global' => ['name' => 'Global', 'type' => 'boolean'],
        'cm_addrtype_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'cm_address_types_pk' => ['type' => 'pk', 'columns' => ['cm_addrtype_tenant_id', 'cm_addrtype_code']]
    ];
    public $indexes = [
        'cm_country_regions_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['cm_addrtype_name']]
    ];
    public $history = false;
    public $audit = false;
    public $options_map = [
        'cm_addrtype_name' => 'name',
        'cm_addrtype_inactive' => 'inactive'
    ];
    public $options_active = [
        'cm_addrtype_inactive' => 0
    ];
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
