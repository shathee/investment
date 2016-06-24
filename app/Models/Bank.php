<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function branchs()
    {
        return $this->hasMany('App\Models\Branch');
    }
    public function getBankNameAttribute($value)
    {
        return ucfirst($value);
    }

}
