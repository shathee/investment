<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function branchs()
    {
        return $this->hasMany('App\Branch','id', 'bank_id');
    }
    public function getBankNameAttribute($value)
    {
        return ucfirst($value);
    }

}
