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

use Numbers\Countries\Countries\Model\Countries;
use Numbers\Countries\Countries\Model\Provinces;

class CountryProvince
{
    /**
     * Cached countries
     *
     * @var array
     */
    private static $cached_countries;

    /**
     * Cached provinces
     *
     * @var array
     */
    private static $cached_provinces = [];

    /**
     * Country
     *
     * @param string $country_code
     * @return string
     */
    public static function country(string $country_code): string
    {
        if (!isset(self::$cached_countries)) {
            self::$cached_countries = Countries::optionsStatic(['i18n' => false]);
        }
        return self::$cached_countries[$country_code]['name'];
    }

    /**
     * Province
     *
     * @param string $country_code
     * @param string $province_code
     * @return string
     */
    public static function province(string $country_code, string $province_code): string
    {
        if (!isset(self::$cached_provinces[$country_code])) {
            self::$cached_provinces[$country_code] = Provinces::optionsStatic([
                'where' => [
                    'cm_province_country_code' => $country_code
                ],
                'i18n' => false
            ]);
        }
        return self::$cached_provinces[$country_code][$province_code]['name'];
    }
}
