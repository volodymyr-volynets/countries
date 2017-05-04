<?php

class numbers_countries_countries_data_features_import_postalcodes extends \Object\Import {
	public $data = [
		'postal_codes' => [
			'options' => [
				'pk' => ['cm_postal_tenant_id', 'cm_postal_country_code', 'cm_postal_postal_code'],
				'model' => 'numbers_countries_countries_model_postal_codes',
				'method' => 'save'
			],
			'data' => []
		]
	];

	/**
	 * Load data from CSL files
	 */
	public function overrides() {
		// importing postal codes
		if (!empty($this->options['cm_postal_country_code'])) {
			$data = numbers_frontend_exports_csv_base::import(__DIR__ . '/postal_codes_' . strtolower($this->options['cm_postal_country_code']) . '.csv');
			unset($data['main'][0]);
			foreach ($data['main'] as $k => $v) {
				$postal_code = $v[2] . '';
				if ($this->options['cm_postal_country_code'] == 'US') {
					if (strlen($postal_code) < 5) $postal_code = str_pad($postal_code, 5, '0', STR_PAD_LEFT);
				}
				$this->data['postal_codes']['data'][$postal_code] = [
					'cm_postal_country_code' => $v[0],
					'cm_postal_province_code' => $v[1],
					'cm_postal_postal_code' => $postal_code,
					'cm_postal_city' => $v[3],
					'cm_postal_latitude' => $v[4],
					'cm_postal_longitude' => $v[5],
					'cm_postal_inactive' => 0
				];
				unset($data['main'][$k]);
				// for testing
				//if (count($this->data['postal_codes']['data']) >= 2502) break;
			}
			unset($data);
		}
	}
}