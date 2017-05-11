<?php

namespace Numbers\Countries\Countries\Controller;
class PostalCodes extends \Object\Controller\Permission {
	public function actionIndex() {
		$form = new \Numbers\Countries\Countries\Form\List2\PostalCodes([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
	public function actionEdit() {
		$form = new \Numbers\Countries\Countries\Form\PostalCodes([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
}