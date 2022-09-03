<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $guarded = [];
    public function DuePaymentbuilding(){
        return $this->belongsTo(Customer::class);
    }
}
