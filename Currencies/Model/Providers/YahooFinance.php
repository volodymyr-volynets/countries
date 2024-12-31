<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Currencies\Model\Providers;

class YahooFinance
{
    /**
     * Get
     *
     * @param array $options
     *		source_currency_code
     *		home_currency_code
     * @return array
     */
    public function get($options)
    {
        $result = [
            'success' => false,
            'error' => [],
            'rate' => null
        ];
        $csv = file_get_contents("http://finance.yahoo.com/d/quotes.csv?e=.csv&f=c4l1&s={$options['source_currency_code']}{$options['home_currency_code']}=X");
        $data = str_getcsv($csv);
        if (!empty($data[1])) {
            $result['rate'] = \Format::readFloatval($data[1], ['bcnumeric' => true]);
            $result['success'] = true;
        }
        return $result;
    }
}
