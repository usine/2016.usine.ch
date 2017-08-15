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
    return view('home');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/actualites', function () {
    return view('actualites/index');
});

Route::get('/association/histoire', function () {
    return view('association/histoire');
});

Route::get('/association/presentation-de-l-usine', function () {
    return view('association/presentation-de-l-usine');
});

Route::get('/renseignements/lieu', function () {
    return view('renseignements/lieu');
});

Route::get('/renseignements/contact', function () {
    return view('renseignements/contact');
});

Route::get('/archives/vox-usini', function () {
    return view('archives/vox-usini');
});

Route::get('/archives/fights', function () {
    return view('archives/fights');
});
