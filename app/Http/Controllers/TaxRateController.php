<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\TaxRate;
use App\Models\Taxtype;

use Kris\LaravelFormBuilder\FormBuilder;

class TaxRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Taxe Rates";
        $data['taxrates'] = TaxRate::paginate(5);
        return view('taxrate.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $data['title'] = "Enter New Tax Rate";
        $data['taxtypes'] = Taxtype::lists('tax_type_name','id')->all();
        $data['form'] = $formBuilder->create('App\Forms\TaxRateCreateForm', [
            'method' => 'POST',
            'url' => 'taxrates'
        ],['taxtypes'=>$data['taxtypes']]
        );

        return view('taxrate.create', $data);
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
        $taxrate = new TaxRate();

        $taxrate->tax_type_id = $request->tax_type_name;
        $taxrate->implement_date = $request->implement_date;
        $taxrate->from_amount = $request->from_amount;
        $taxrate->to_amount = $request->to_amount;
        $taxrate->tax_rate_taka = $request->tax_rate_amount;
        $taxrate->tax_rate_percent = $request->tax_rate_percent;


        $taxrate->save();
        $request->session()->flash('alert-success', 'Tax Rate was successful Created!');
        return redirect('taxrates');
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
    public function edit($id, FormBuilder $formBuilder)
    {
        $data['title'] = "Enter New Tax Rate";
        $data['taxrates'] = TaxRate::find($id);

        $data['taxtypes'] = Taxtype::lists('tax_type_name','id')->all();
        $data['form'] = $formBuilder->create('App\Forms\TaxRateEditForm', [
            'method' => 'POST',
            'url' => 'taxrates/'.$id.'/edit'
        ],['taxtypes'=>$data['taxtypes'],'taxrate'=>$data['taxrates']]
        );

        return view('taxrate.edit', $data);
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
        $taxrate = TaxRate::find($id);
        $taxrate->tax_type_id = $request->tax_type_name;
        $taxrate->implement_date = $request->implement_date;
        $taxrate->from_amount = $request->from_amount;
        $taxrate->to_amount = $request->to_amount;
        $taxrate->tax_rate_taka = $request->tax_rate_amount;
        $taxrate->tax_rate_percent = $request->tax_rate_percent;
        $taxrate->save();

        $request->session()->flash('alert-success', 'Tax Rate successfully Updated!');
        return redirect('taxrates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $taxrate = TaxRate::find($id);

        $taxrate->delete();
        $request->session()->flash('alert-success', 'Tax Rate successfully Deleted!');
        return redirect('taxrate');
    }
}
