<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\OnegaiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('request/index');
});

Route::get('/flow', function () {
    return view('request/flow');
});

Route::get('/price', function () {
    return view('request/price');
});

Route::get('/performance', function () {
    return view('request/performance');
});

Route::get('/contact',[ContactController::class,'get']);

Route::post('/confirm',[ContactController::class,'confirm']);

Route::post('/result',[ContactController::class,'post']);

// Route::get('/request', function () {
//     return view('request/request');
// });

Route::get('/request',[OnegaiController::class,'get']);

Route::post('/resultjob',[OnegaiController::class,'post']);
