<?php

class numbers_countries_countries_data_import extends \Object\Import {
	public $data = [
		'modules' => [
			'options' => [
				'pk' => ['sm_module_code'],
				'model' => '\Numbers\Backend\System\Modules\Model\Collection\Modules',
				'method' => 'save'
			],
			'data' => [
				[
					'sm_module_code' => 'CM',
					'sm_module_type' => 20,
					'sm_module_name' => 'C/M Country Management',
					'sm_module_parent_module_code' => null,
					'sm_module_transactions' => 0,
					'sm_module_multiple' => 0,
					'sm_module_activation_model' => null,
					'sm_module_custom_activation' => false,
					'sm_module_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Module\Dependencies' => []
				]
			]
		],
		'features' => [
			'options' => [
				'pk' => ['sm_feature_code'],
				'model' => '\Numbers\Backend\System\Modules\Model\Collection\Module\Features',
				'method' => 'save'
			],
			'data' => [
				[
					'sm_feature_module_code' => 'CM',
					'sm_feature_code' => 'CM::REGIONS',
					'sm_feature_type' => 10,
					'sm_feature_name' => 'C/M Regions',
					'sm_feature_activation_model' => null,
					'sm_feature_activated_by_default' => 1,
					'sm_feature_inactive' => 0
				],
				[
					'sm_feature_module_code' => 'CM',
					'sm_feature_code' => 'CM::COUNTRIES',
					'sm_feature_type' => 10,
					'sm_feature_name' => 'C/M Countries',
					'sm_feature_activation_model' => null,
					'sm_feature_activated_by_default' => 1,
					'sm_feature_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Module\Dependencies' => [
						[
							'sm_mdldep_child_module_code' => 'CM',
							'sm_mdldep_child_feature_code' => 'CM::REGIONS'
						]
					]
				],
				[
					'sm_feature_module_code' => 'CM',
					'sm_feature_code' => 'CM::PROVINCES',
					'sm_feature_type' => 10,
					'sm_feature_name' => 'C/M Provinces',
					'sm_feature_activation_model' => null,
					'sm_feature_activated_by_default' => 1,
					'sm_feature_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Module\Dependencies' => [
						[
							'sm_mdldep_child_module_code' => 'CM',
							'sm_mdldep_child_feature_code' => 'CM::COUNTRIES'
						]
					]
				],
				[
					'sm_feature_module_code' => 'CM',
					'sm_feature_code' => 'CM::POSTAL_CODES',
					'sm_feature_type' => 10,
					'sm_feature_name' => 'C/M Postal Codes',
					'sm_feature_activation_model' => null,
					'sm_feature_activated_by_default' => 1,
					'sm_feature_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Module\Dependencies' => [
						[
							'sm_mdldep_child_module_code' => 'CM',
							'sm_mdldep_child_feature_code' => 'CM::PROVINCES'
						]
					]
				],
				[
					'sm_feature_module_code' => 'CM',
					'sm_feature_code' => 'CM::ALL_COUNTRIES',
					'sm_feature_type' => 30,
					'sm_feature_name' => 'C/M All Available Countries, Regions and Provinces',
					'sm_feature_activation_model' => 'numbers_countries_countries_data_features_countries_all',
					'sm_feature_activated_by_default' => 0,
					'sm_feature_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Module\Dependencies' => [
						[
							'sm_mdldep_child_module_code' => 'CM',
							'sm_mdldep_child_feature_code' => 'CM::PROVINCES'
						]
					]
				],
				[
					'sm_feature_module_code' => 'CM',
					'sm_feature_code' => 'CM::CA_ONLY',
					'sm_feature_type' => 30,
					'sm_feature_name' => 'C/M Canadian Countries, Regions and Provinces',
					'sm_feature_activation_model' => 'numbers_countries_countries_data_features_countries_ca',
					'sm_feature_activated_by_default' => 0,
					'sm_feature_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Module\Dependencies' => [
						[
							'sm_mdldep_child_module_code' => 'CM',
							'sm_mdldep_child_feature_code' => 'CM::PROVINCES'
						]
					]
				],
				[
					'sm_feature_module_code' => 'CM',
					'sm_feature_code' => 'CM::US_ONLY',
					'sm_feature_type' => 30,
					'sm_feature_name' => 'C/M U.S. Countries, Regions and Provinces',
					'sm_feature_activation_model' => 'numbers_countries_countries_data_features_countries_us',
					'sm_feature_activated_by_default' => 0,
					'sm_feature_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Module\Dependencies' => [
						[
							'sm_mdldep_child_module_code' => 'CM',
							'sm_mdldep_child_feature_code' => 'CM::PROVINCES'
						]
					]
				],
				[
					'sm_feature_module_code' => 'CM',
					'sm_feature_code' => 'CM::US_POSTAL',
					'sm_feature_type' => 30,
					'sm_feature_name' => 'C/M U.S. Zip Codes',
					'sm_feature_activation_model' => 'numbers_countries_countries_data_features_postal_us',
					'sm_feature_activated_by_default' => 0,
					'sm_feature_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Module\Dependencies' => [
						[
							'sm_mdldep_child_module_code' => 'CM',
							'sm_mdldep_child_feature_code' => 'CM::POSTAL_CODES'
						],
						[
							'sm_mdldep_child_module_code' => 'CM',
							'sm_mdldep_child_feature_code' => 'CM::US_ONLY'
						]
					]
				],
				[
					'sm_feature_module_code' => 'CM',
					'sm_feature_code' => 'CM::CA_POSTAL',
					'sm_feature_type' => 30,
					'sm_feature_name' => 'C/M Canadian Postal Codes',
					'sm_feature_activation_model' => 'numbers_countries_countries_data_features_postal_ca',
					'sm_feature_activated_by_default' => 0,
					'sm_feature_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Module\Dependencies' => [
						[
							'sm_mdldep_child_module_code' => 'CM',
							'sm_mdldep_child_feature_code' => 'CM::POSTAL_CODES'
						],
						[
							'sm_mdldep_child_module_code' => 'CM',
							'sm_mdldep_child_feature_code' => 'CM::CA_ONLY'
						]
					]
				],
			]
		],
	];
}