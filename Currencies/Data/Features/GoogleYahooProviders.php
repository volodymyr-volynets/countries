<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Currencies\Data\Features;

use Numbers\Countries\Currencies\Data\Features\Import\Providers;
use Object\Activation\Base;

class GoogleYahooProviders extends Base
{
    public function activate(array $options = []): array
    {
        $import = new Providers($options);
        return $import->process();
    }
}
