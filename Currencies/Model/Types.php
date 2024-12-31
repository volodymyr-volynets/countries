<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Currencies\Model;

use Object\Table;

class Types extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'CY';
    public $title = 'C/Y Currency Types';
    public $name = 'cy_currency_types';
    public $pk = ['cy_currtype_tenant_id', 'cy_currtype_code'];
    public $tenant = true;
    public $orderby;
    public $limit;
    public $column_prefix = 'cy_currtype_';
    public $columns = [
        'cy_currtype_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'cy_currtype_code' => ['name' => 'Type Code', 'domain' => 'currency_type', 'null' => false],
        'cy_currtype_name' => ['name' => 'Name', 'domain' => 'name'],
        'cy_currtype_primary' => ['name' => 'Primary', 'type' => 'boolean'],
        'cy_currtype_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'cy_currency_types_pk' => ['type' => 'pk', 'columns' => ['cy_currtype_tenant_id', 'cy_currtype_code']]
    ];
    public $indexes = [
        'cy_currency_types_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['cy_currtype_name']]
    ];
    public $history = false;
    public $audit = false;
    public $optimistic_lock = true;
    public $options_map = [
        'cy_currtype_code' => 'name',
        'cy_currtype_name' => 'name',
        'cy_currtype_inactive' => 'inactive'
    ];
    public $options_active = [
        'cy_currtype_inactive' => 0
    ];
    public $engine = [
        'MySQLi' => 'InnoDB'
    ];

    public $cache = true;
    public $cache_tags = [];
    public $cache_memory = true;

    public $data_asset = [
        'classification' => 'client_confidential',
        'protection' => 2,
        'scope' => 'enterprise'
    ];
}
