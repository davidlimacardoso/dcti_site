<?php

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
    return view('/webpages/home');
});

Route::view('inicio','/webpages/home');

Route::view('indisponivel','/webpages/no_page');

Route::view('contato','/webpages/contact');

//ROTAS DE TESTE

Route::view('navbar','components/navbar');

Route::view('sobre','webpages/sobre');

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');



