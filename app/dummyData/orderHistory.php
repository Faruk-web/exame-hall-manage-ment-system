<?php

namespace App\dummyData;

use Carbon\Carbon;

class orderHistory {

    public $name;
    public $id;
    public $history = [];

    public function __construct($name,$id)
    {
        $this->name = $name;
        $this->id = $id;
        
    }

    public function setData($times)
    {
        
        for($i = 1;$i<=$times;$i++)
        {
            
            $date = Carbon::now()->subMinutes(rand(1, 55))->format('d-m-y');
            $orderId = 'ord44118435';
            $totalItem = rand(1,20);
            $payAmount = rand(10000,300000);
            $saleCommission = rand(500,2000);
            
            $arr = [$date,$orderId,$totalItem,$payAmount,$saleCommission];
            
            array_push($this->history,$arr);    
         }
    }

}