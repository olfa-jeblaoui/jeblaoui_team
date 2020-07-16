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

//Route::get('/', function () {
   // return view('welcome');
//});
route::get('/reservation','PagesController@reservation');
route::get('/affectation','PagesController@affectation');
route::get('/historique','PagesController@historique');

//pax function

route::get('/pax/create','PaxController@create')->name('pax.create');
route::post('/pax/store','PaxController@store')->name('pax.store');