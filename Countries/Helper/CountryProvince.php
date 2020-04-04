<?php

namespace Numbers\Countries\Countries\Helper;
class CountryProvince {

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
	public static function country(string $country_code) : string {
		if (!isset(self::$cached_countries)) {
			self::$cached_countries = \Numbers\Countries\Countries\Model\Countries::optionsStatic(['i18n' => false]);
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
	public static function province(string $country_code, string $province_code) : string {
		if (!isset(self::$cached_provinces[$country_code])) {
			self::$cached_provinces[$country_code] = \Numbers\Countries\Countries\Model\Provinces::optionsStatic([
				'where' => [
					'cm_province_country_code' => $country_code
				],
				'i18n' => false
			]);
		}
		return self::$cached_provinces[$country_code][$province_code]['name'];
	}
}