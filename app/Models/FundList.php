<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class FundList extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];


    public function branch()
    {
        return $this->belongsTo('App\Models\Branch','branch_id','id');
    }


}
