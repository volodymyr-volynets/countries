<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Currencies\Data\Features\Import;

use Numbers\Backend\IO\CSV\Imports;
use Object\Import;

class Currencies extends Import
{
    public $data = [
        'currencies' => [
            'options' => [
                'pk' => ['cy_currency_tenant_id', 'cy_currency_code'],
                'model' => '\Numbers\Countries\Currencies\Model\Currencies',
                'method' => 'save_insert_new'
            ],
            'data' => []
        ],
        'currency_types' => [
            'options' => [
                'pk' => ['cy_currtype_tenant_id', 'cy_currtype_code'],
                'model' => '\Numbers\Countries\Currencies\Model\Types',
                'method' => 'save_insert_new'
            ],
            'data' => [
                [
                    'cy_currtype_code' => 'SPOT',
                    'cy_currtype_name' => 'Spot',
                    'cy_currtype_primary' => 1,
                    'cy_currtype_inactive' => 0
                ],
                [
                    'cy_currtype_code' => 'CORPORATE',
                    'cy_currtype_name' => 'Corporate',
                    'cy_currtype_inactive' => 0
                ],
                [
                    'cy_currtype_code' => 'USER',
                    'cy_currtype_name' => 'User',
                    'cy_currtype_inactive' => 0
                ],
                [
                    'cy_currtype_code' => 'FIXED',
                    'cy_currtype_name' => 'Fixed',
                    'cy_currtype_inactive' => 0
                ]
            ]
        ]
    ];

    /**
     * Load data from CSV file
     */
    public function overrides()
    {
        // step 1: countries and regions
        $currencies = [];
        $data = Imports::read(__DIR__ . '/currencies.csv');
        if ($data['success']) {
            unset($data['data']['Main Sheet'][0]);
            foreach ($data['data']['Main Sheet'] as $k => $v) {
                $currencies[$v[1]] = [
                    'cy_currency_code' => $v[0],
                    'cy_currency_name' => $v[1],
                    'cy_currency_symbol' => $v[2],
                    'cy_currency_fraction_digits' => (int) $v[3],
                    'cy_currency_inactive' => (int) $v[4]
                ];
            }
        }
        $this->data['currencies']['data'] = $currencies;
    }
}
