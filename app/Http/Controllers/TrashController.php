<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TrashController extends Controller
{
    public function index(){

        $data['title'] = "See Trashed Items";
        return view('trash.index', $data);
    }

    public function taxrate(){

        $data['title'] = "Deleted Records";
        $data['taxrates'] = \App\Models\TaxRate::onlyTrashed()->paginate(5);
        return view('trash.taxrate', $data);
    }
}
