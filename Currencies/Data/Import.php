<?php

namespace Numbers\Countries\Currencies\Data;
class Import extends \Object\Import {
	public $data = [
		'modules' => [
			'options' => [
				'pk' => ['sm_module_code'],
				'model' => '\Numbers\Backend\System\Modules\Model\Collection\Modules',
				'method' => 'save'
			],
			'data' => [
				[
					'sm_module_code' => 'CY',
					'sm_module_type' => 20,
					'sm_module_name' => 'C/Y Currency Management',
					'sm_module_abbreviation' => 'C/Y',
					'sm_module_icon' => 'dollar',
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
					'sm_feature_module_code' => 'CY',
					'sm_feature_code' => 'CY::CURRENCIES',
					'sm_feature_type' => 10,
					'sm_feature_name' => 'C/M Currencies',
					'sm_feature_icon' => 'dollar',
					'sm_feature_activation_model' => null,
					'sm_feature_activated_by_default' => 1,
					'sm_feature_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Module\Dependencies' => []
				],
				[
					'sm_feature_module_code' => 'CY',
					'sm_feature_code' => 'CY::COMMON_CURRENCIES',
					'sm_feature_type' => 30,
					'sm_feature_name' => 'C/Y Common Currencies & Types',
					'sm_feature_activation_model' => '\Numbers\Countries\Currencies\Data\Features\CommonCurrencies',
					'sm_feature_activated_by_default' => 0,
					'sm_feature_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Module\Dependencies' => [
						[
							'sm_mdldep_child_module_code' => 'CY',
							'sm_mdldep_child_feature_code' => 'CY::CURRENCIES'
						]
					]
				],
				[
					'sm_feature_module_code' => 'CY',
					'sm_feature_code' => 'CY::GOOGLE_YAHOO_PROVIDERS',
					'sm_feature_type' => 30,
					'sm_feature_name' => 'C/Y Google & Yahoo Providers',
					'sm_feature_activation_model' => '\Numbers\Countries\Currencies\Data\Features\GoogleYahooProviders',
					'sm_feature_activated_by_default' => 0,
					'sm_feature_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Module\Dependencies' => [
						[
							'sm_mdldep_child_module_code' => 'CY',
							'sm_mdldep_child_feature_code' => 'CY::CURRENCIES'
						]
					]
				]
			]
		],
	];
}