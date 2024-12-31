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

use Object\Data;

class Fractions extends Data
{
    public $module_code = 'CY';
    public $title = 'C/Y Currency Fractions';
    public $column_key = 'cy_fraction_id';
    public $column_prefix = 'cy_fraction_';
    public $orderby = ['cy_fraction_name' => SORT_ASC];
    public $columns = [
        'cy_fraction_id' => ['name' => 'Digits', 'domain' => 'fraction_digits'],
        'cy_fraction_name' => ['name' => 'Name', 'type' => 'text']
    ];
    public $data = [
        0 => ['cy_fraction_name' => '0 digits'],
        1 => ['cy_fraction_name' => '1 digit'],
        2 => ['cy_fraction_name' => '2 digits'],
    ];
}
