<?php

class numbers_data_misc_countries_controller_provinces extends \Object\Controller\Permission {
	public function actionIndex() {
		$list = new numbers_data_misc_countries_model_list_provinces([
			'input' => \Request::input()
		]);
		echo $list->render();
	}
	public function actionEdit() {
		$form = new numbers_data_misc_countries_model_form_provinces([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
}