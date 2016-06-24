<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class TaxTypeEditForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('tax_type_name', 'text',[
                'rules' => 'required',
                'attr' => ['class' => 'form-control input-sm'],
                'value'=> $this->getData('taxtype.tax_type_name')
            ])
            ->add('deduct_on', 'select',[
                'rules'=>'required','choices'=>['y'=>'Y','t'=>'T','v'=>'V'],
                'selected' => $this->getData('taxtype.deduct_on'),
                'empty_value' => '=== Select Deduct On Type ==='
            ])
            ->add('yearly', 'select',[
                'rules'=>'required','choices'=>['y'=>'Y','n'=>'N'],
                'selected' => $this->getData('taxtype.yearly_calculate'),
                'empty_value' => '=== Select Yearly ==='
            ])
            ->add('save', 'submit', [
                'label' => 'Update',
                'attr' => ['class' => 'btn btn-info']
            ])
            ->add('clear', 'reset', ['label' => 'Clear',
                'attr' => ['class' => 'btn btn-warning']
            ]);
    }
}
