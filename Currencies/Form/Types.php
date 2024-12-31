<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Currencies\Form;

use Object\Form\Wrapper\Base;

class Types extends Base
{
    public $form_link = 'cy_currency_types';
    public $module_code = 'CY';
    public $title = 'C/Y Currency Types Form';
    public $options = [
        'segment' => self::SEGMENT_FORM,
        'actions' => [
            'refresh' => true,
            'back' => true,
            'new' => true,
            'import' => true
        ]
    ];
    public $containers = [
        'top' => ['default_row_type' => 'grid', 'order' => 100],
        'buttons' => ['default_row_type' => 'grid', 'order' => 900]
    ];
    public $rows = [];
    public $elements = [
        'top' => [
            'cy_currtype_code' => [
                'cy_currtype_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Code', 'domain' => 'currency_type', 'percent' => 95, 'required' => true, 'navigation' => true],
                'cy_currtype_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ],
            'cy_currtype_name' => [
                'cy_currtype_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 95, 'required' => true],
                'cy_currtype_primary' => ['order' => 2, 'label_name' => 'Primary', 'type' => 'boolean', 'percent' => 5],
            ],
            'organizations' => [
                '\Numbers\Countries\Currencies\Model\Type\Organizations' => ['order' => 1, 'row_order' => 400, 'label_name' => 'Organizations', 'domain' => 'organization_id', 'multiple_column' => 'cy_curtypeorg_organization_id', 'percent' => 100, 'method' => 'multiselect', 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive'],
            ]
        ],
        'buttons' => [
            self::BUTTONS => self::BUTTONS_DATA_GROUP
        ]
    ];
    public $collection = [
        'name' => 'Currency Types',
        'model' => '\Numbers\Countries\Currencies\Model\Types',
        'details' => [
            '\Numbers\Countries\Currencies\Model\Type\Organizations' => [
                'name' => 'Organizations',
                'pk' => ['cy_curtypeorg_tenant_id', 'cy_curtypeorg_type_code', 'cy_curtypeorg_organization_id'],
                'type' => '1M',
                'map' => ['cy_currtype_tenant_id' => 'cy_curtypeorg_tenant_id', 'cy_currtype_code' => 'cy_curtypeorg_type_code']
            ]
        ]
    ];
}
