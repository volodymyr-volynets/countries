<?php

namespace Numbers\Countries\Currencies\Controller\Tasks;
class OnlineRates extends \Object\Controller\Permission {
	public function actionEdit() {
		$form = new \Numbers\Countries\Currencies\Form\Tasks\OnlineRates([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
}