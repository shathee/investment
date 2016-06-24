<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class TaxTypeCreateForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('tax_type_name', 'text',[
                'rules' => 'required',
                'attr' => ['class' => 'form-control input-sm']
            ])
            ->add('deduct_on', 'select',[
                'rules'=>'required','choices'=>['y'=>'Y','t'=>'T','v'=>'V'],
                'empty_value' => '=== Select Deduct On Type ==='
            ])
            ->add('yearly', 'select',[
                'rules'=>'required','choices'=>['y'=>'Y','n'=>'N'],
                'empty_value' => '=== Select Yearly ==='
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
