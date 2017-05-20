<?php

class numbers_data_accounting_cs_model_currency_rates2 extends numbers_data_accounting_cs_model_currency_rates {
	public $pk = ['cs_currrate_currency_type', 'cs_currrate_source_currency_code', 'cs_currrate_home_currency_code', 'cs_currrate_id'];
	public $limit = 10;
	public $options_map;
	public $orderby = [
		'cs_currrate_datetime' => SORT_DESC
	];

	public function options($options = []) {
		$options['__options'] = true;
		$data = $this->optionsQueryData($options);
		$result = [];
		foreach ($data as $k => $v) {
			$date = Format::date($v['cs_currrate_datetime']);
			$result[$k]['parent'] = $date;
			if (!isset($result[$date])) {
				$result[$date] = ['name' => $date, 'parent' => null, 'disabled' => true];
			}
			$result[$k]['name'] = '#' . $v['cs_currrate_id'] . ' - ' . Format::currency_rate($v['cs_currrate_rate']);
			$result[$k]['title'] = Format::datetime($v['cs_currrate_datetime']) . ' - ' . i18n(null, $v['cs_currrate_provider_name']);
			$result[$k]['cs_currrate_rate'] = Format::currency_rate($v['cs_currrate_rate']);
		}
		$converted = \Helper\Tree::convertByParent($result, 'parent');
		$result = [];
		\Helper\Tree::convertTreeToOptionsMulti($converted, 0, ['name_field' => 'name'], $result);
		return $result;
	}
}