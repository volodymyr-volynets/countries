<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Countries\Data;

use Object\Import;

class ABAC extends Import
{
    public $data = [
        'abac_attributes' => [
            'options' => [
                'pk' => ['sm_abacattr_id'],
                'model' => '\Numbers\Backend\ABAC\Model\Attributes',
                'method' => 'save'
            ],
            'data' => [
                [
                    'sm_abacattr_id' => '::id::cm_country_code',
                    'sm_abacattr_code' => 'cm_country_code',
                    'sm_abacattr_name' => 'Country Code',
                    'sm_abacattr_module_code' => 'CM',
                    'sm_abacattr_parent_abacattr_id' => null,
                    'sm_abacattr_tenant' => 1,
                    'sm_abacattr_module' => 0,
                    'sm_abacattr_flag_abac' => 1,
                    'sm_abacattr_flag_assingment' => 1,
                    'sm_abacattr_flag_attribute' => 1,
                    'sm_abacattr_flag_link' => 0,
                    'sm_abacattr_model_id' => '::primary_model::\Numbers\Countries\Countries\Model\Countries',
                    'sm_abacattr_domain' => '::from::columns::cm_country_code::domain',
                    'sm_abacattr_type' => '::from::columns::cm_country_code::type',
                    'sm_abacattr_is_numeric_key' => '::from::columns::cm_country_code::is_numeric_key',
                    'sm_abacattr_inactive' => 0
                ],
                [
                    'sm_abacattr_id' => '::id::cm_country_code3',
                    'sm_abacattr_code' => 'cm_country_code3',
                    'sm_abacattr_name' => 'Country Code (3)',
                    'sm_abacattr_module_code' => 'CM',
                    'sm_abacattr_parent_abacattr_id' => null,
                    'sm_abacattr_tenant' => 1,
                    'sm_abacattr_module' => 0,
                    'sm_abacattr_flag_abac' => 1,
                    'sm_abacattr_flag_assingment' => 1,
                    'sm_abacattr_flag_attribute' => 1,
                    'sm_abacattr_flag_link' => 0,
                    'sm_abacattr_model_id' => '::primary_model::\Numbers\Countries\Countries\Model\Countries',
                    'sm_abacattr_domain' => '::from::columns::cm_country_code3::domain',
                    'sm_abacattr_type' => '::from::columns::cm_country_code3::type',
                    'sm_abacattr_is_numeric_key' => '::from::columns::cm_country_code3::is_numeric_key',
                    'sm_abacattr_inactive' => 0
                ],
                [
                    'sm_abacattr_id' => '::id::cm_region_id',
                    'sm_abacattr_code' => 'cm_region_id',
                    'sm_abacattr_name' => 'Country Region #',
                    'sm_abacattr_module_code' => 'CM',
                    'sm_abacattr_parent_abacattr_id' => null,
                    'sm_abacattr_tenant' => 1,
                    'sm_abacattr_module' => 0,
                    'sm_abacattr_flag_abac' => 1,
                    'sm_abacattr_flag_assingment' => 1,
                    'sm_abacattr_flag_attribute' => 1,
                    'sm_abacattr_flag_link' => 0,
                    'sm_abacattr_model_id' => '::primary_model::\Numbers\Countries\Countries\Model\Regions',
                    'sm_abacattr_domain' => '::from::columns::cm_region_id::domain',
                    'sm_abacattr_type' => '::from::columns::cm_region_id::type',
                    'sm_abacattr_is_numeric_key' => '::from::columns::cm_region_id::is_numeric_key',
                    'sm_abacattr_inactive' => 0
                ],
                [
                    'sm_abacattr_id' => '::id::cm_province_province_code',
                    'sm_abacattr_code' => 'cm_province_province_code',
                    'sm_abacattr_name' => 'Country Province Code',
                    'sm_abacattr_module_code' => 'CM',
                    'sm_abacattr_parent_abacattr_id' => null,
                    'sm_abacattr_tenant' => 1,
                    'sm_abacattr_module' => 0,
                    'sm_abacattr_flag_abac' => 1,
                    'sm_abacattr_flag_assingment' => 1,
                    'sm_abacattr_flag_attribute' => 1,
                    'sm_abacattr_flag_link' => 0,
                    'sm_abacattr_model_id' => '::primary_model::\Numbers\Countries\Countries\Model\Provinces',
                    'sm_abacattr_domain' => '::from::columns::cm_province_province_code::domain',
                    'sm_abacattr_type' => '::from::columns::cm_province_province_code::type',
                    'sm_abacattr_is_numeric_key' => '::from::columns::cm_province_province_code::is_numeric_key',
                    'sm_abacattr_inactive' => 0
                ]
            ]
        ],
    ];
}
