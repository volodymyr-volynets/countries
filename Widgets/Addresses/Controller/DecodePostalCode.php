<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Widgets\Addresses\Controller;

use Numbers\Countries\Countries\Model\PostalCodes;
use Object\Controller\Authorized;

class DecodePostalCode extends Authorized
{
    public $title = 'Decode Postal Code';
    public function actionIndex()
    {
        $input = \Request::input();
        // verify token
        $crypt = new \Crypt();
        $token_data = $crypt->tokenVerify($input['token'] ?? '', ['general']);
        // fetch postal code
        $data = PostalCodes::getStatic([
            'where' => [
                'cm_postal_country_code' => trim(strtoupper($input['country_code'] . '')),
                'cm_postal_postal_code' => preg_replace('/\s+/', '', trim(strtoupper($input['postal_code']))),
            ],
            'single_row' => true,
            'pk' => null
        ]);
        if (!empty($data)) {
            $result = [
                'success' => true,
                'error' => [],
                'latitude' => $data['cm_postal_latitude'],
                'longitude' => $data['cm_postal_longitude'],
                'city' => $data['cm_postal_city'],
                'province_code' => $data['cm_postal_province_code'],
                'postal_code' => $data['cm_postal_postal_code'],
                'country_code' => $data['cm_postal_country_code'],
            ];
        } else {
            $result = [
                'success' => false,
                'error' => [i18n(null, 'Could not decode postal code!')],
                'latitude' => null,
                'longitude' => null,
                'city' => null,
                'province_code' => null,
                'postal_code' => null,
                'country_code' => null,
            ];
        }
        \Layout::renderAs($result, 'application/json');
    }
}
