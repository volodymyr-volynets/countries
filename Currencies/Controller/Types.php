<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Currencies\Controller;

use Object\Controller\Permission;
use Object\Form\Wrapper\Import;

class Types extends Permission
{
    public function actionIndex()
    {
        $form = new \Numbers\Countries\Currencies\Form\List2\Types([
            'input' => \Request::input()
        ]);
        echo $form->render();
    }
    public function actionEdit()
    {
        $form = new \Numbers\Countries\Currencies\Form\Types([
            'input' => \Request::input()
        ]);
        echo $form->render();
    }
    public function actionImport()
    {
        $form = new Import([
            'model' => '\Numbers\Countries\Currencies\Form\Types',
            'input' => \Request::input()
        ]);
        echo $form->render();
    }
}
