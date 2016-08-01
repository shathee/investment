<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function bank()
    {
        return $this->belongsTo('App\Models\Bank','bank_id', 'id');
    }

    public function getBankNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function funds()
    {
        return $this->hasMany('App\Models\FundList');
    }



}
