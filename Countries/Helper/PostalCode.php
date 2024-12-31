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

use Numbers\Countries\Countries\Model\PostalCodes;

class PostalCode
{
    /**
     * Cached addresses
     *
     * @var array
     */
    private static $cached_postal_codes = [];

    /**
     * Decode postal code
     *
     * @param string $country_code
     * @param string $postal_code
     * @return array
     */
    public static function decodePostalCode(string $country_code, string $postal_code): array
    {
        // we are caching addresses to limit number of requests to google
        if (isset(self::$cached_postal_codes[$postal_code])) {
            return self::$cached_postal_codes[$postal_code];
        }
        $result = [
            'success' => false,
            'error' => [],
            'latitude' => null,
            'longitude' => null,
            'formatted_address' => null
        ];
        $data = PostalCodes::getStatic([
            'where' => [
                'cm_postal_country_code' => $country_code,
                'cm_postal_postal_code' => $postal_code
            ],
            'pk' => null,
            'single_row' => true
        ]);
        if (!empty($data)) {
            $result['success'] = true;
            $result['latitude'] = $data['cm_postal_latitude'];
            $result['longitude'] = $data['cm_postal_longitude'];
            $result['formatted_address'] = concat_ws(', ', $data['cm_postal_city'], $data['cm_postal_province_code'], $data['cm_postal_country_code'], $data['cm_postal_postal_code']);
        } else {
            $result['error'][] = Messages::COUNTRY_POSTAL_CODE_NOT_FOUND;
        }
        self::$cached_postal_codes[$postal_code] = $result;
        return $result;
    }
}
