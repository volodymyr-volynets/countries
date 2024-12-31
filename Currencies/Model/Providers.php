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

class Providers extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'CY';
    public $title = 'C/Y Providers';
    public $name = 'cy_providers';
    public $pk = ['cy_provider_tenant_id', 'cy_provider_code'];
    public $tenant = true;
    public $orderby;
    public $limit;
    public $column_prefix = 'cy_provider_';
    public $columns = [
        'cy_provider_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'cy_provider_code' => ['name' => 'Code', 'domain' => 'group_code'],
        'cy_provider_name' => ['name' => 'Name', 'domain' => 'name'],
        'cy_provider_method' => ['name' => 'Method', 'type' => 'text'],
        'cy_provider_home_currency_code' => ['name' => 'Currency Code', 'domain' => 'currency_code', 'null' => true],
        'cy_provider_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'cy_providers_pk' => ['type' => 'pk', 'columns' => ['cy_provider_tenant_id', 'cy_provider_code']],
        'cy_provider_home_currency_code_fk' => [
            'type' => 'fk',
            'columns' => ['cy_provider_tenant_id', 'cy_provider_home_currency_code'],
            'foreign_model' => '\Numbers\Countries\Currencies\Model\Currencies',
            'foreign_columns' => ['cy_currency_tenant_id', 'cy_currency_code']
        ]
    ];
    public $indexes = [
        'cy_providers_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['cy_provider_name']]
    ];
    public $history = false;
    public $audit = false;
    public $optimistic_lock = true;
    public $options_map = [
        'cy_provider_name' => 'name'
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
