<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;

use App\Http\Requests;
use Kris\LaravelFormBuilder\FormBuilder;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data['banks'] = Bank::all();
        return view('bank.index',$data);
    }

    public function show($id){
        $data['bank'] = Bank::find($id);
        //dd($data['bank']->branchs);
        return view('bank.show',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder){

        $data['title'] = "Create New Bank";

        $data['form'] = $formBuilder->create('App\Forms\BankCreateForm', [
            'method' => 'POST',
            'url' => 'banks'
        ]);

        return view('bank.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $bank = new Bank;

        $bank->bank_name = $request->bank_name;
        $bank->bank_type = $request->bank_type;

        $bank->save();
        $request->session()->flash('alert-success', 'Bank was successful Created!');
        return redirect('banks');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder,$id){

       $data['title'] = "Edit bank";
       $data['user'] = Bank::find($id);

       $data['form'] = $formBuilder->create('App\Forms\BankEditForm', [
            'method' => 'POST',
            'url' => 'banks/'.$id.'/edit'
       ],['user_data'=>$data['user']]
       );

        return view('bank.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        //dd($id);

        $bank = Bank::find($id);
        $bank->bank_name=$request->bank_name;
        $bank->bank_type=$request->bank_type;
        $bank->save();

            $request->session()->flash('alert-success', 'Bank was successfully Updated!');
            return redirect('banks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        print $id;
        $bank = Bank::find($id);

        $bank->delete();
        $request->session()->flash('alert-success', 'Bank was successfully Deleted!');
        return redirect('banks');
    }

    public function testform(){


    }


}
