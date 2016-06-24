<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class BankCreateForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('bank_name', 'text',[
                'rules' => 'required|min:5',
                'attr' => ['class' => 'form-control input-sm']
                ])
            ->add('bank_type', 'select',[
                'rules'=>'required','choices'=>['Government'=>'Government','Private'=>'Private'],
                'empty_value' => '=== Select Bank Type ==='
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
