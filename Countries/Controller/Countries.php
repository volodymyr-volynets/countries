<?php

namespace Numbers\Countries\Countries\Controller;
class Countries extends \Object\Controller\Permission {
	public function actionIndex() {
		$form = new \Numbers\Countries\Countries\Form\List2\Countries([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
	public function actionEdit() {
		$form = new \Numbers\Countries\Countries\Form\Countries([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
}