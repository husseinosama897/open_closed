<?php

use Illuminate\Support\Facades\Route;
use App\solid\payment;
use App\solid\paymentService;
use App\Http\Controllers\paymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/open_closed/{paymentgateway}', [paymentController::class,'index']);

