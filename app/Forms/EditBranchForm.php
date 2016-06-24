<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class EditBranchForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('bank_name', 'select',[
                'rules'=>'required',
                'choices'=>$this->getData('banks'),
                'selected' => $this->getData('branch.bank_id'),
                'empty_value' => '=== Select Bank ===',
                'attr' => ['class' => 'form-control']
            ])
            ->add('branch_name', 'text',[
                'rules' => 'required|min:5',
                'attr' => ['class' => 'form-control input-sm'],
                'value'=> $this->getData('branch.branch_name')
            ])
            ->add('branch_add', 'textarea',[
                'rules' => '',
                'attr' => ['class' => 'form-control'],
                'value'=> $this->getData('branch.branch_add')
            ])
            ->add('branch_dist', 'select',[
                'rules'=>'required',
                'choices'=>$this->getData('district'),
                'selected' => $this->getData('branch.branch_dist'),
                'empty_value' => '=== Select District ===',
                'attr' => ['class' => 'form-control']
            ])
            ->add('branch_phone', 'text',[
                'rules' => '',
                'attr' => ['class' => 'form-control'],
                'value'=> $this->getData('branch.branch_phone')
            ])
            ->add('branch_cont_person', 'text',[
                'rules' => '',
                'attr' => ['class' => 'form-control'],
                'value'=> $this->getData('branch.branch_cont_person')
            ])
            ->add('cont_person_desig', 'text',[
                'rules' => '',
                'attr' => ['class' => 'form-control'],
                'value'=> $this->getData('branch.cont_person_desig')
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
