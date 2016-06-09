<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;

use App\Http\Requests;
//use Kris\LaravelFormBuilder\FormBuilder;

class BankController extends Controller
{
    public function index(){
        $data['banks'] = Bank::all();
        return view('bank.index',$data);
    }
    public function create(){

        $data['title'] = "Create New Bank";
        return view('bank.create', $data);
    }

    public function store(){

        dd($_POST);
    }

    public function edit($id){

       $data['form'] = "Edit bank";
       $data['user'] = Bank::find($id);

        //dd($data['user']);

       return view('bank.edit', $data);
    }

    public function update(){

        dd($_POST);
    }

    public function testform(){


    }


}
