<?php

Route::get('/', function () {
    return view('/webpages/home');
});

Route::view('inicio','/webpages/home');

//PÁGINA INDISPONÍVEL
Route::view('indisponivel','/webpages/no_page');

Route::view('contato','/webpages/contact');

//EMAIL FORM CONTROLLER
Route::post('contactForm','emailController@contatoForm');

Route::view('sobre','webpages/sobre');





