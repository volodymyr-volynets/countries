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

use Object\Import;

class Providers extends Import
{
    public $data = [
        'providers' => [
            'options' => [
                'pk' => ['cy_provider_code'],
                'model' => '\Numbers\Countries\Currencies\Model\Providers',
                'method' => 'save_insert_new'
            ],
            'data' => [
                [
                    'cy_provider_code' => 'GOOGLE_FINANCE',
                    'cy_provider_name' => 'Google Finance',
                    'cy_provider_method' => '\Numbers\Countries\Currencies\Model\Providers\GoogleFinance::get',
                    'cy_provider_inactive' => 0
                ],
                [
                    'cy_provider_code' => 'YAHOO_FINANCE',
                    'cy_provider_name' => 'Yahoo Finance',
                    'cy_provider_method' => '\Numbers\Countries\Currencies\Model\Providers\YahooFinance::get',
                    'cy_provider_inactive' => 0
                ]
            ]
        ]
    ];
}
