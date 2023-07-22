<?php

namespace Numbers\Countries\Currencies\Model\Collection;
class Rates extends \Object\Collection {
	public $data = [
		'name' => 'Currency Rates',
		'model' => '\Numbers\Countries\Currencies\Model\Rates',
		'details' => [
			'\Numbers\Countries\Currencies\Model\Rate\Organizations' => [
				'name' => 'Organizations',
				'pk' => ['cy_curateorg_tenant_id', 'cy_curateorg_rate_id', 'cy_curateorg_organization_id'],
				'type' => '1M',
				'map' => ['cy_currrate_tenant_id' => 'cy_curateorg_tenant_id', 'cy_currrate_id' => 'cy_curateorg_rate_id']
			]
		]
	];
}