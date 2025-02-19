<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Countries\Currencies\Form\Task;

use Numbers\Users\TaskScheduler\Helper\CreateJob;
use Object\Content\Messages;
use Object\Form\Wrapper\Base;

class OnlineRates extends Base
{
    public $form_link = 'cy_tasks_online_rates';
    public $module_code = 'CY';
    public $title = 'C/Y Online Rates Task';
    public $options = [
        'segment' => self::SEGMENT_TASK,
        'actions' => [
            'refresh' => true
        ]
    ];
    public $containers = [
        'top' => ['default_row_type' => 'grid', 'order' => 100],
        'buttons' => ['default_row_type' => 'grid', 'order' => 900]
    ];
    public $rows = [];
    public $elements = [
        'top' => [
            'provider_code' => [
                'cy_currrate_provider_name' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Provider', 'domain' => 'group_code', 'percent' => 50, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Countries\Currencies\Model\Providers', 'onchange' => 'this.form.submit();'],
                'cy_currrate_currency_type' => ['order' => 2, 'label_name' => 'Type', 'domain' => 'currency_type', 'percent' => 50, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Countries\Currencies\Model\Types', 'onchange' => 'this.form.submit();'],
            ],
            'organization_1' => [
                'organization_1' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Organization 1', 'domain' => 'organization_id', 'null' => true, 'percent' => 100, 'required' => true, 'method' => 'select', 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive']
            ],
            'organization_2' => [
                'organization_2' => ['order' => 1, 'row_order' => 400, 'label_name' => 'Organization 2', 'domain' => 'organization_id', 'null' => true, 'percent' => 100, 'required' => false, 'method' => 'select', 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive']
            ],
            'organization_3' => [
                'organization_3' => ['order' => 1, 'row_order' => 500, 'label_name' => 'Organization 3', 'domain' => 'organization_id', 'null' => true, 'percent' => 100, 'required' => false, 'method' => 'select', 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive']
            ]
        ],
        'buttons' => [
            self::BUTTONS => [
                self::BUTTON_SUBMIT_SAVE => self::BUTTON_SUBMIT_DATA,
                self::BUTTON_SUBMIT_POST => ['order' => 150, 'button_group' => 'left', 'value' => 'Create Job', 'type' => 'danger', 'method' => 'button2', 'accesskey' => 'p', 'process_submit' => 'other']
            ]
        ]
    ];

    public function validate(& $form)
    {
        if ($form->hasErrors()) {
            return;
        }
        // if we are creating a job
        if (!empty($form->values['__submit_post'])) {
            CreateJob::create('CY_TASK_ONLINE_RATES', $form);
        }
        $model = new \Numbers\Countries\Currencies\Task\OnlineRates($form->values);
        $result = $model->process();
        if ($result['success']) {
            $form->error(SUCCESS, Messages::OPERATION_EXECUTED);
        } else {
            $form->error(DANGER, $result['error']);
        }
    }

    public function save(& $form)
    {
        return true;
    }
}
