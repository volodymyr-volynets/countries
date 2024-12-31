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

use Helper\cURL;

class Google
{
    /**
     * Cached addresses
     *
     * @var array
     */
    private static $cached_addresses = [];

    /**
     * Decode an address
     *
     * @param string $address
     * @return array
     */
    public static function decodeAnAddress(string $address): array
    {
        // we are caching addresses to limit number of requests to google
        if (isset(self::$cached_addresses[$address])) {
            return self::$cached_addresses[$address];
        }
        $result = [
            'success' => false,
            'error' => [],
            'latitude' => null,
            'longitude' => null,
            'formatted_address' => null
        ];
        $temp = cURL::get('https://maps.googleapis.com/maps/api/geocode/json', [
            'params' => [
                'address' => $address,
                'key' => \Application::get('google.maps.api_key')
            ],
            'json' => true
        ]);
        if (!empty($temp['data']['error_message'])) {
            $result['error'][] = $temp['data']['error_message'];
        } elseif ($temp['data']['status'] == 'OK') {
            $result['latitude'] = $temp['data']['results'][0]['geometry']['location']['lat'];
            $result['longitude'] = $temp['data']['results'][0]['geometry']['location']['lng'];
            $result['formatted_address'] = $temp['data']['results'][0]['formatted_address'];
            $result['success'] = true;
        } else {
            $result['error'][] = Messages::UNKNOWN_ERROR;
        }
        self::$cached_addresses[$address] = $result;
        return $result;
    }
}
