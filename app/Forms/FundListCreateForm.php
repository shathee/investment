<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class FundListCreateForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('branch_id', 'select',[
                'rules'=>'required',
                'choices'=>$this->getData('branchs'),
                'empty_value' => '=== Select Bank ===',
                'attr' => ['class' => 'form-control']
            ])
            ->add('fund_name', 'text')
            ->add('fund_start_date', 'date')
            ->add('fund_desc', 'textarea')
            ->add('fund_acc_no', 'text')
            ->add('fund_start_balance', 'text');
    }
}
