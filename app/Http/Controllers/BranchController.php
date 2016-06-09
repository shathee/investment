<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Branch;
//use App\Bank;

class BranchController extends Controller
{
    public function index(){
        $data['branchs']  = Branch::with('bank')->orderBy('bank_id', 'asc')->paginate(10);

        return view('branch.index',$data);
    }
}
