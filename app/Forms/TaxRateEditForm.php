<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class TaxRateEditForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('tax_type_name', 'select',[
                'rules'=>'required',
                'choices'=>$this->getData('taxtypes'),
                'empty_value' => '=== Select Tax Type ===',
                'selected' => $this->getData('taxrate.tax_type_id'),
                'attr' => ['class' => 'form-control']
            ])
            ->add('implement_date', 'date',[
                'value' => $this->getData('taxrate.implement_date'),
                'attr' => ['class' => 'form-control']
            ])
            ->add('from_amount', 'text',[
                'rules' => 'required|numeric|min:0',
                'value' => $this->getData('taxrate.from_amount'),
                'attr' => ['class' => 'form-control input-sm']
            ])
            ->add('to_amount', 'text',[
                'rules' => 'required|numeric|min:from_amount',
                'value' => $this->getData('taxrate.to_amount'),
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
