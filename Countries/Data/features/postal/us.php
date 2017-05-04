<?php

class numbers_countries_countries_data_features_postal_us extends object_activation_base {
	public function activate(array $options = []) : array {
		$import = new numbers_countries_countries_data_features_import_postalcodes([
			'cm_postal_country_code' => 'US'
		]);
		return $import->process();
	}
}