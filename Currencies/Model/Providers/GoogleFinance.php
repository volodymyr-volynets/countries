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

class GoogleFinance
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
        $temp = file_get_contents("https://finance.google.com/finance/converter?a=1&from={$options['source_currency_code']}&to={$options['home_currency_code']}");
        preg_match("#<span class=bld>(.*?){$options['home_currency_code']}</span>#", $temp, $match);
        if (!empty($match[1])) {
            $result['rate'] = \Format::readFloatval($match[1], ['bcnumeric' => true]);
            $result['success'] = true;
        }
        return $result;
    }
}
