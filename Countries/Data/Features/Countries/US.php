<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Countries\Data\Features\Countries;

use Numbers\Countries\Countries\Data\Features\Import\Countries;
use Object\Activation\Base;

class US extends Base
{
    public function activate(array $options = []): array
    {
        $import = new Countries([
            'cm_country_code' => 'US'
        ]);
        return $import->process();
    }
}
