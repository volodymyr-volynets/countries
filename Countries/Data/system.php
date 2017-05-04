<?php

class numbers_countries_countries_data_system extends \Object\Import {
	public $data = [
		'controllers' => [
			'options' => [
				'pk' => ['sm_resource_id'],
				'model' => '\Numbers\Backend\System\Modules\Model\Collection\Resources',
				'method' => 'save'
			],
			'data' => [
				[
					'sm_resource_id' => '::id::numbers_countries_countries_controller_countries',
					'sm_resource_code' => 'numbers_countries_countries_controller_countries',
					'sm_resource_type' => 100,
					'sm_resource_name' => 'C/M Countries',
					'sm_resource_description' => null,
					'sm_resource_icon' => 'globe',
					'sm_resource_module_code' => 'CM',
					'sm_resource_group1_name' => null,
					'sm_resource_group2_name' => null,
					'sm_resource_group3_name' => null,
					'sm_resource_group4_name' => null,
					'sm_resource_group5_name' => null,
					'sm_resource_group6_name' => null,
					'sm_resource_group7_name' => null,
					'sm_resource_group8_name' => null,
					'sm_resource_group9_name' => null,
					'sm_resource_acl_public' => 0,
					'sm_resource_acl_authorized' => 0,
					'sm_resource_acl_permission' => 1,
					'sm_resource_menu_acl_resource_id' => null,
					'sm_resource_menu_acl_method_code' => null,
					'sm_resource_menu_acl_action_id' => null,
					'sm_resource_menu_url' => null,
					'sm_resource_menu_options_generator' => null,
					'sm_resource_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Resource\Features' => [
						[
							'sm_rsrcftr_feature_code' => 'CM::COUNTRIES',
							'sm_rsrcftr_inactive' => 0
						]
					],
					'\Numbers\Backend\System\Modules\Model\Resource\Map' => [
						[
							'sm_rsrcmp_method_code' => 'Index',
							'sm_rsrcmp_action_id' => 1000,
							'sm_rsrcmp_inactive' => 0
						],
						[
							'sm_rsrcmp_method_code' => 'Index',
							'sm_rsrcmp_action_id' => 1010,
							'sm_rsrcmp_inactive' => 0
						],
						[
							'sm_rsrcmp_method_code' => 'Edit',
							'sm_rsrcmp_action_id' => 2000,
							'sm_rsrcmp_inactive' => 0
						],
						[
							'sm_rsrcmp_method_code' => 'Edit',
							'sm_rsrcmp_action_id' => 2010,
							'sm_rsrcmp_inactive' => 0
						],
						[
							'sm_rsrcmp_method_code' => 'Edit',
							'sm_rsrcmp_action_id' => 2020,
							'sm_rsrcmp_inactive' => 0
						],
						[
							'sm_rsrcmp_method_code' => 'Edit',
							'sm_rsrcmp_action_id' => 2030,
							'sm_rsrcmp_inactive' => 0
						],
						[
							'sm_rsrcmp_method_code' => 'Edit',
							'sm_rsrcmp_action_id' => 2040,
							'sm_rsrcmp_inactive' => 0
						],
					]
				]
			]
		],
		'menu' => [
			'options' => [
				'pk' => ['sm_resource_id'],
				'model' => '\Numbers\Backend\System\Modules\Model\Collection\Resources',
				'method' => 'save'
			],
			'data' => [
				[
					'sm_resource_id' => '::id::menu_numbers_countries_countries_controller_countries',
					'sm_resource_code' => 'menu_numbers_countries_countries_controller_countries',
					'sm_resource_type' => 200,
					'sm_resource_name' => 'Countries',
					'sm_resource_description' => 'C/M Countries',
					'sm_resource_icon' => 'globe',
					'sm_resource_module_code' => 'CM',
					'sm_resource_group1_name' => 'Operations',
					'sm_resource_group2_name' => 'System',
					'sm_resource_group3_name' => 'Country Management',
					'sm_resource_group4_name' => null,
					'sm_resource_group5_name' => null,
					'sm_resource_group6_name' => null,
					'sm_resource_group7_name' => null,
					'sm_resource_group8_name' => null,
					'sm_resource_group9_name' => null,
					'sm_resource_acl_public' => 0,
					'sm_resource_acl_authorized' => 0,
					'sm_resource_acl_permission' => 1,
					'sm_resource_menu_acl_resource_id' => '::id::numbers_countries_countries_controller_countries',
					'sm_resource_menu_acl_method_code' => 'index',
					'sm_resource_menu_acl_action_id' => 1000,
					'sm_resource_menu_url' => '/numbers/countries/countries/controller/countries',
					'sm_resource_menu_options_generator' => null,
					'sm_resource_inactive' => 0
				]
			]
		]
	];
}