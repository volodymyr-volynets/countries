<?php

class numbers_countries_countries_controller_countries extends object_controller_permission {
	public function action_index() {
		echo 'List';
//		$list = new numbers_data_misc_countries_model_list_countries([
//			'input' => request::input()
//		]);
//		echo $list->render();
	}
	public function action_edit() {
		echo 'Edit';
//		$form = new numbers_data_misc_countries_model_form_countries([
//			'input' => request::input()
//		]);
//		echo $form->render();
	}
}