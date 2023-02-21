<?php 

namespace App\solid;
use App\solid\payment;
use App\solid\paypal;
class service {

    


    public function paymentservice(payment $payment)   {

 $payment->pay();
 
    }

}