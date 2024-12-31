<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Currencies\Controller\Task;

use Object\Controller\Permission;

class OnlineRates extends Permission
{
    public function actionEdit()
    {
        $form = new \Numbers\Countries\Currencies\Form\Task\OnlineRates([
            'input' => \Request::input()
        ]);
        echo $form->render();
    }
}
