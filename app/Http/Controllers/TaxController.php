<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Taxtype;
use Kris\LaravelFormBuilder\FormBuilder;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tax'] = Taxtype::all();

        return view('tax.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $data['title'] = "Create New Tax Type";
        $data['form'] = $formBuilder->create('App\Forms\TaxTypeCreateForm', [
            'method' => 'POST',
            'url' => 'tax'
        ]);

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
        $taxtype = new Taxtype;

        $taxtype->tax_type_name = $request->tax_type_name;
        $taxtype->deduct_on = $request->deduct_on;
        $taxtype->yearly_calculate = $request->yearly;

        $taxtype->save();
        $request->session()->flash('alert-success', 'Tax Type Entry was successful');
        return redirect('tax');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder, $id)
    {
        $data['title'] = "Edit Tax Type";
        $data['taxtype'] = Taxtype::find($id);
        $data['form'] = $formBuilder->create('App\Forms\TaxTypeEditForm', [
            'method' => 'POST',
            'url' => 'tax/'.$id.'/edit'
        ],['taxtype'=>$data['taxtype']]
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
        $taxtype = Taxtype::find($id);;

        $taxtype->tax_type_name = $request->tax_type_name;
        $taxtype->deduct_on = $request->deduct_on;
        $taxtype->yearly_calculate = $request->yearly;

        $taxtype->save();
        $request->session()->flash('alert-success', 'Tax Type successfully updated!');
        return redirect('tax');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {

        $taxtype = Taxtype::find($id);

        $taxtype->delete();
        $request->session()->flash('alert-success', 'successfully Deleted!');
        return redirect('tax');
    }
}
