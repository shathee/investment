<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class TaxRateCreateForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('tax_type_name', 'select',[
                'rules'=>'required',
                'choices'=>$this->getData('taxtypes'),
                'empty_value' => '=== Select Tax Type ===',
                'attr' => ['class' => 'form-control']
            ])
            ->add('implement_date', 'date')
            ->add('from_amount', 'text',[
                'rules' => 'required|numeric|min:0',
                'attr' => ['class' => 'form-control input-sm']
            ])
            ->add('to_amount', 'text',[
                'rules' => 'required|numeric|min:from_amount',
                'attr' => ['class' => 'form-control input-sm']
            ])
            ->add('tax_rate_amount', 'text',[
                'rules' => 'numeric',
                'attr' => ['class' => 'form-control input-sm']
            ])
            ->add('tax_rate_percent', 'text',[
                'rules' => 'numeric',
                'attr' => ['class' => 'form-control input-sm']
            ])
            ->add('save', 'submit', [
                'label' => 'Save',
                'attr' => ['class' => 'btn btn-info']
            ])
            ->add('clear', 'reset', ['label' => 'Clear',
                'attr' => ['class' => 'btn btn-warning']
            ]);
    }
}
