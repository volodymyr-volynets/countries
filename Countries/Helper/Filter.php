<?php

namespace Numbers\Countries\Countries\Helper;
class Filter {
	const F_COUNTRY_CODE = ['label_name' => 'Country', 'domain' => 'country_code', 'null' => true, 'method' => 'select', 'searchable' => true, 'options_model' => '\Numbers\Countries\Countries\Model\Countries'];
	const F_PROVINCE_CODE = ['label_name' => 'Province', 'domain' => 'province_code', 'null' => true, 'method' => 'select', 'searchable' => true, 'options_model' => '\Numbers\Countries\Countries\Model\Provinces'];
}