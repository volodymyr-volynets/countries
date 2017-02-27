<?php

class numbers_data_system_countries_presets_postalcodes_data_import extends object_import {
	public $import_data = [
		'postal_codes_ca' => [
			'options' => [
				'pk' => ['cm_cntpostal_country_code', 'cm_cntpostal_postal_code'],
				'model' => 'numbers_data_system_countries_countries_model_postal_codes',
				'method' => 'save',
				'quick_pk_comparison' => ['cm_cntpostal_country_code', 'cm_cntpostal_province_code']
			],
			'data' => []
		],
		'postal_codes_us' => [
			'options' => [
				'pk' => ['cm_cntpostal_country_code', 'cm_cntpostal_postal_code'],
				'model' => 'numbers_data_system_countries_countries_model_postal_codes',
				'method' => 'save',
				'quick_pk_comparison' => ['cm_cntpostal_country_code', 'cm_cntpostal_province_code']
			],
			'data' => []
		]
	];

	/**
	 * Load data from CSL files
	 */
	public function overrides() {
		// importing postal codes from Canada
		$data = numbers_frontend_exports_csv_base::import(__DIR__ . '/postal_codes_ca.csv');
		unset($data['main'][0]);
		foreach ($data['main'] as $k => $v) {
			$this->import_data['postal_codes_ca']['data'][] = [
				'cm_cntpostal_country_code' => $v[0],
				'cm_cntpostal_province_code' => $v[1],
				'cm_cntpostal_postal_code' => $v[2],
				'cm_cntpostal_city' => $v[3],
				'cm_cntpostal_latitude' => (float) $v[4],
				'cm_cntpostal_longitude' => (float) $v[5],
				'cm_cntpostal_inactive' => 0
			];
			unset($data['main'][$k]);
			//if (count($this->import_data['postal_codes_ca']['data']) >= 2502) break;
		}
		// importing postal codes from US
		$data = numbers_frontend_exports_csv_base::import(__DIR__ . '/postal_codes_us.csv');
		unset($data['main'][0]);
		foreach ($data['main'] as $k => $v) {
			$this->import_data['postal_codes_us']['data'][] = [
				'cm_cntpostal_country_code' => $v[0],
				'cm_cntpostal_province_code' => $v[1],
				'cm_cntpostal_postal_code' => $v[2],
				'cm_cntpostal_city' => $v[3],
				'cm_cntpostal_latitude' => (float) $v[4],
				'cm_cntpostal_longitude' => (float) $v[5],
				'cm_cntpostal_inactive' => 0
			];
			unset($data['main'][$k]);
			//if (count($this->import_data['postal_codes_us']['data']) >= 2502) break;
		}
		unset($data);
	}
}