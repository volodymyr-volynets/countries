<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Countries\Helper;

class Filter
{
    public const F_COUNTRY_CODE = ['label_name' => 'Country', 'domain' => 'country_code', 'null' => true, 'method' => 'select', 'searchable' => true, 'options_model' => '\Numbers\Countries\Countries\Model\Countries'];
    public const F_PROVINCE_CODE = ['label_name' => 'Province', 'domain' => 'province_code', 'null' => true, 'method' => 'select', 'searchable' => true, 'options_model' => '\Numbers\Countries\Countries\Model\Provinces'];
}
