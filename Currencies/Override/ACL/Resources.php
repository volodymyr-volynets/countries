<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Currencies\Override\ACL;

class Resources
{
    public $data = [
        'currencies' => [
            'primary' => [
                'datasource' => '\Numbers\Countries\Currencies\DataSource\Currencies'
            ]
        ]
    ];
}
