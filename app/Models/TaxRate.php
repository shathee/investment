<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxRate extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'taxrates';


    public function taxtype()
    {
        return $this->belongsTo('App\Models\TaxType','tax_type_id', 'id');
    }
}
