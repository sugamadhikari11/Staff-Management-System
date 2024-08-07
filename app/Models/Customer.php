<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['customer_name', 'PAN_VAT', 'address'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
