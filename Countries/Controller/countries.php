<?php

class numbers_countries_countries_controller_countries extends \Object\Controller\Permission {
	public function actionIndex() {
		echo 'List';
//		$list = new numbers_data_misc_countries_model_list_countries([
//			'input' => \Request::input()
//		]);
//		echo $list->render();
	}
	public function actionEdit() {
		echo 'Edit';
//		$form = new numbers_data_misc_countries_model_form_countries([
//			'input' => \Request::input()
//		]);
//		echo $form->render();
	}
}