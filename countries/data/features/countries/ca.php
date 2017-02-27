<?php

class numbers_countries_countries_data_features_countries_ca extends object_activation_base {
	public function activate(array $options = []) : array {
		$import = new numbers_countries_countries_data_features_import_countries([
			'cm_country_code' => 'CA'
		]);
		return $import->process();
	}
}