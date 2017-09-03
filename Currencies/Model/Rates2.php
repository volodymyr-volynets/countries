<?php

namespace Numbers\Countries\Currencies\Model;
class Rates2 extends \Numbers\Countries\Currencies\Model\Rates {
	public $pk = ['cy_currrate_currency_type', 'cy_currrate_source_currency_code', 'cy_currrate_home_currency_code', 'cy_currrate_id'];
	public $limit = 10;
	public $options_map;
	public $orderby = [
		'cy_currrate_datetime' => SORT_DESC
	];

	public function options($options = []) {
		$options['__options'] = true;
		$data = $this->optionsQueryData($options);
		$result = [];
		foreach ($data as $k => $v) {
			$date = \Format::date($v['cy_currrate_datetime']);
			$result[$k]['parent'] = $date;
			if (!isset($result[$date])) {
				$result[$date] = ['name' => $date, 'parent' => null, 'disabled' => true];
			}
			$result[$k]['name'] = '#' . $v['cy_currrate_id'] . ' - ' . \Format::currencyRate($v['cy_currrate_rate']);
			$result[$k]['title'] = Format::datetime($v['cy_currrate_datetime']) . ' - ' . i18n(null, $v['cy_currrate_provider_name']);
			$result[$k]['cy_currrate_rate'] = Format::currency_rate($v['cy_currrate_rate']);
		}
		$converted = \Helper\Tree::convertByParent($result, 'parent');
		$result = [];
		\Helper\Tree::convertTreeToOptionsMulti($converted, 0, ['name_field' => 'name'], $result);
		return $result;
	}
}