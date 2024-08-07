<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['product_id', 'customer_id', 'sales_id'];

    public function SPU_relation()
    {
        return $this->belongsTo(SPU_relation::class);
    }
}
