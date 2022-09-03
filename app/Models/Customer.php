<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    public function DuePaymentflat(){
        return $this->hasOne(Building::class,'customer_id','id');
    }
    public function DuePaymentland(){
        return $this->hasOne(Land::class,'customer_id','id');
    }
    public function DuePayment(){
        return $this->hasOne(DuePaymen::class,'customer_id','id');
    }
    public function Registration(){
        return $this->hasOne(Registration::class,'customer_id','id');
    }
    
}
