<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Countries\Data\Features\PostalCodes;

use Numbers\Countries\Countries\Data\Features\Import\PostalCodes;
use Object\Activation\Base;

class Brazil extends Base
{
    public function activate(array $options = []): array
    {
        $import = new PostalCodes([
            'cm_postal_country_code' => 'BR'
        ]);
        return $import->process();
    }
}
