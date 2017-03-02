<?php

class numbers_data_misc_countries_controller_regions extends object_controller_permission {
	public function action_index() {
		$list = new numbers_data_misc_countries_model_list_regions([
			'input' => request::input()
		]);
		echo $list->render();
	}
	public function action_edit() {
		$form = new numbers_data_misc_countries_model_form_regions([
			'input' => request::input()
		]);
		echo $form->render();
	}
}