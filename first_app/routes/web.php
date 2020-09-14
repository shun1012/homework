<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/introduce', 'HelloController@introduce');
//
// Route::get('/cat', 'HelloController@neko');
//
// Route::get('/hometown', 'HelloController@ie');
//
// Route::get('/hobby', 'HelloController@syumi');
//
// Route::get('/works', 'HelloController@works');
//
// Route::get('/introduce', 'HelloController@back');
//

// model練習
Route::get('/index','PersonController@index');

Route::get('/buy/index','BuyController@index');
