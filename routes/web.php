<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('dashboard', function () {
//     return view('dashboard');
// });

//dashboard
// Route::get('dashboard','OrderController@showOrder')->name('create_Order');
Route::get('dashboardContact','OrderController@showContact')->name('dashboardContact')->middleware('auth');
Route::get('Packetsdashboard','OrderController@showPackets')->name('Packetsdashboard')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

//order
Route::get('createPots','OrderController@createPots')->name('createPots');
Route::get('storePots','OrderController@storePots')->name('storePots');

Route::get('destroy','OrderController@destroyorder')->name('destroyOrder');

Route::get('orderHome',function(){
    return view('orderHome');
});



Route::get('pots',function(){
    return view('pots');
});
Route::get('packets',function(){
    return view('packets');
});







//Donate
Route::get('createPackets','OrderController@createPackets');
Route::get('storePackets','OrderController@storePackets')->name('storePackets');
Route::get('destroyPackets','OrderController@destroyPackets')->name('destroyPackets');
//coment
Route::get('store_comment','OrderController@store_comment')->name('store_Comment');
Route::get('destroyComment','OrderController@destroyComment')->name('destroyComment');





Auth::routes();

Route::get('order','HomeController@show');



Route::get('confirm',function(){
    return view('donate_order.confirm');
});
Route::get('donateConfirm',function(){
    return view('donate_order.confirmDonate');
});
Route::get('DonateHome',function(){
    return view('donate_order.DonateHome');
});
