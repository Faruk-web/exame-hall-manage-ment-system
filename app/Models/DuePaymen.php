<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuePaymen extends Model
{
    protected $guarded = [];
    public function DuePayments(){
        return $this->belongsTo(Customer::class);
    }
}
