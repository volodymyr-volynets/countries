<?php

namespace Numbers\Countries\Currencies\Task;
class OnlineRates extends \Numbers\Users\TaskScheduler\Abstract2\Task {

	public $task_code = 'CY_TASK_ONLINE_RATES';

	public function execute(array $parameters, array $options = []) : array {
		$result = [
			'success' => false,
			'error' => [],
			'data' => []
		];
		// load provider
		$model = new \Numbers\Countries\Currencies\Model\Providers();
		$provider_data = $model->get([
			'where' => [
				'cy_provider_code' => $parameters['cy_currrate_provider_name']
			],
			'single_row' => true,
			'pk' => null
		]);
		$method = \Factory::method($provider_data['cy_provider_method'], null, true);
		$provider_result = call_user_func_array($method, [$provider_data['cy_provider_home_currency_code'], $parameters['datetime']]);
		if (!$provider_result['success']) {
			$result['error'] = $provider_result['error'];
			return $result;
		}
		$data = [];
		foreach ($provider_result['rows'] as $k => $v) {
			$v['cy_currrate_datetime'] = $provider_result['date'];
			$v['cy_currrate_currency_type'] = $parameters['cy_currrate_currency_type'];
			$v['cy_currrate_provider_name'] = $parameters['cy_currrate_provider_name'];
			$v['\Numbers\Countries\Currencies\Model\Rate\Organizations'] = [
				$parameters['organization_1'] => $parameters['organization_1']
			];
			if (!empty($parameters['organization_2'])) {
				$v['\Numbers\Countries\Currencies\Model\Rate\Organizations'][$parameters['organization_2']] = $parameters['organization_2'];
			}
			if (!empty($parameters['organization_3'])) {
				$v['\Numbers\Countries\Currencies\Model\Rate\Organizations'][$parameters['organization_3']] = $parameters['organization_3'];
			}
			$data[] = $v;
		}
		$collection = new \Numbers\Countries\Currencies\Model\Collection\Rates();
		$collection_result = $collection->mergeMultiple($data);
		if (!$result['success']) {
			$result['error'] = $collection_result['error'];
		} else {
			$result['success'] = true;
		}
		return $result;
	}
}