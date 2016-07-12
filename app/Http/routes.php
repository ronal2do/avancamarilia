<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/menu', function () {
    return view('pages.menu');
});
Route::get('/cidade', function () {
    return view('pages.cidade');
});
Route::get('/pessoas', function () {
    return view('pages.pessoas');
});
Route::get('/oportunidades', function () {
    return view('pages.oportunidades');
});
Route::get('/bem-estar', function () {
    return view('pages.bemestar');
});
Route::get('/transparencia', function () {
    return view('pages.transparencia');
});


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/sugestao', function () {
    return view('pages.sugestao');
});
Route::post('/sugestao', 'MessageController@store');