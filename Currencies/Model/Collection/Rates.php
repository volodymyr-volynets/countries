<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Currencies\Model\Collection;

use Object\Collection;

class Rates extends Collection
{
    public $data = [
        'name' => 'Currency Rates',
        'model' => '\Numbers\Countries\Currencies\Model\Rates',
        'details' => [
            '\Numbers\Countries\Currencies\Model\Rate\Organizations' => [
                'name' => 'Organizations',
                'pk' => ['cy_curateorg_tenant_id', 'cy_curateorg_rate_id', 'cy_curateorg_organization_id'],
                'type' => '1M',
                'map' => ['cy_currrate_tenant_id' => 'cy_curateorg_tenant_id', 'cy_currrate_id' => 'cy_curateorg_rate_id']
            ]
        ]
    ];
}
