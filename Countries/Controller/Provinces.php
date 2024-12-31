<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Countries\Controller;

use Object\Controller\Permission;
use Object\Form\Wrapper\Import;

class Provinces extends Permission
{
    public function actionIndex()
    {
        $form = new \Numbers\Countries\Countries\Form\List2\Provinces([
            'input' => \Request::input()
        ]);
        echo $form->render();
    }
    public function actionEdit()
    {
        $form = new \Numbers\Countries\Countries\Form\Provinces([
            'input' => \Request::input()
        ]);
        echo $form->render();
    }
    public function actionImport()
    {
        $form = new Import([
            'model' => '\Numbers\Countries\Countries\Form\Provinces',
            'input' => \Request::input()
        ]);
        echo $form->render();
    }
}
