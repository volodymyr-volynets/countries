<?php

class numbers_data_misc_countries_controller_regions extends \Object\Controller\Permission {
	public function actionIndex() {
		$list = new numbers_data_misc_countries_model_list_regions([
			'input' => \Request::input()
		]);
		echo $list->render();
	}
	public function actionEdit() {
		$form = new numbers_data_misc_countries_model_form_regions([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
}