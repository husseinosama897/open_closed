<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\solid\payment;
use App\solid\Stripe;
use App\solid\paypal;

class OpenClosedProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        $this->app->bind(payment::class, function ($app) {
         $d=  [ new paypal,
           new Stripe ] ;

           return $d;
        });
       

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        
    }
}
