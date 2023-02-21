<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\solid\service;
use App\Models\paymentgateway;
use App\solid\paypal;
use App\solid\payment;
use Illuminate\Support\Str;



class paymentController extends Controller
{

    private const MODELS_NAMESPACE = 'App\\Models';


    public function index(paymentgateway  $paymentgateway ){
    
      
    
        $pay =    "App\\solid\\$paymentgateway->name";;
   
   $mod =  new $pay;
  


   $service = new service();

   $service->paymentservice($mod);
   
    }
}
