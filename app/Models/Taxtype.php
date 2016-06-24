<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taxtype extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];


    public function taxrates()
    {
        return $this->hasMany('App\Models\TaxRate');
    }
}
