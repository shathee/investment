<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CreateBranchForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('bank_name', 'select',[
                'rules'=>'required',
                'choices'=>$this->getData('banks'),
                'empty_value' => '=== Select Bank ===',
                'attr' => ['class' => 'form-control']
            ])
            ->add('branch_name', 'text',[
                'rules' => 'required|min:5',
                'attr' => ['class' => 'form-control input-sm']
            ])
            ->add('branch_add', 'textarea',[
                'rules' => '',
                'attr' => ['class' => 'form-control']
            ])
            ->add('branch_dist', 'select',[
                'rules'=>'required',
                'choices'=>$this->getData('district'),
                'empty_value' => '=== Select District ===',
                'attr' => ['class' => 'form-control']
            ])
            ->add('branch_phone', 'text',[
                'rules' => '',
                'attr' => ['class' => 'form-control']
            ])
            ->add('branch_cont_person', 'text',[
                'rules' => '',
                'attr' => ['class' => 'form-control']
            ])
            ->add('cont_person_desig', 'text',[
                'rules' => '',
                'attr' => ['class' => 'form-control']
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
