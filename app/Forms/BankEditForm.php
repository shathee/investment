<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class BankEditForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('bank_name', 'text',[
                'rules' => 'required|min:5',
                'attr' => ['class' => 'form-control input-sm'],
                'value'=> $this->getData('user_data.bank_name')
            ])
            ->add('bank_type', 'select',[
                'rules' => 'required',
                'choices' => ['Government' => 'Government', 'Private' => 'Private'],
                'selected' => $this->getData('user_data.bank_type'),
                'empty_value' => '=== Select Bank Type ===',
                'attr' => ['class' => 'form-control input-sm']
            ])
            ->add('Update', 'submit', [
                'label' => 'Save',
                'attr' => ['class' => 'btn btn-info']
            ])
            ->add('clear', 'reset', ['label' => 'Clear',
                'attr' => ['class' => 'btn btn-warning']
            ]);
    }
}
