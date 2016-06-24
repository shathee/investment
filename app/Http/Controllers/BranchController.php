<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Branch;
use App\Models\Bank;
use App\Models\District;
use Kris\LaravelFormBuilder\FormBuilder;

class BranchController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "All Branchs";
        $data['branchs']  = Branch::with('bank')->orderBy('branch_name', 'asc')->paginate(10);
        return view('branch.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $data['title'] = "Create New Branch";
        $data['banks'] = Bank::lists('bank_name','id')->all();
        $data['district'] = District::lists('name','id')->all();
        //dd($data['banks']);
        $data['form'] = $formBuilder->create('App\Forms\CreateBranchForm', [
            'method' => 'POST',
            'url' => 'branchs'
        ],['banks'=>$data['banks'],'district'=>$data['district']]
        );

        return view('branch.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $branch = new Branch;

        $branch->bank_id = $request->bank_name;
        $branch->branch_name = $request->branch_name;
        $branch->branch_add = $request->branch_add;
        $branch->branch_dist = $request->branch_dist;
        $branch->branch_phone = $request->branch_phone;
        $branch->branch_cont_person = $request->branch_cont_person;
        $branch->cont_person_desig = $request->cont_person_desig;

        $branch->save();
        $request->session()->flash('alert-success', 'Branch was successful Created!');
        return redirect('branchs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['branch']  = Branch::find($id);
        return view('branch.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder,$id)
    {
        $data['title'] = "Edit Branch";
        $data['branch'] = Branch::find($id);
        $data['banks'] = Bank::lists('bank_name','id')->all();
        $data['district'] = District::lists('name','id')->all();

        $data['form'] = $formBuilder->create('App\Forms\EditBranchForm', [
            'method' => 'POST',
            'url' => 'branch/'.$id.'/edit'
        ],['branch'=>$data['branch'],'banks'=>$data['banks'],'district'=>$data['district']]
        );

        return view('branch.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $branch = Branch::find($id);
        $branch->bank_id = $request->bank_name;
        $branch->branch_name = $request->branch_name;
        $branch->branch_add = $request->branch_add;
        $branch->branch_dist = $request->branch_dist;
        $branch->branch_phone = $request->branch_phone;
        $branch->branch_cont_person = $request->branch_cont_person;
        $branch->cont_person_desig = $request->cont_person_desig;
        $branch->save();

        $request->session()->flash('alert-success', 'Branch was successfully Updated!');
        return redirect('branchs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

        $branch = Branch::find($id);

        $branch->delete();
        $request->session()->flash('alert-success', 'Branch was successfully Deleted!');
        return redirect('branchs');
    }
}
