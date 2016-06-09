<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function bank()
    {
        return $this->belongsTo('App\Bank','bank_id', 'id');
    }

    public function getBankNameAttribute($value)
    {
        return ucfirst($value);
    }



}
