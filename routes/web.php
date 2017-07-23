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

Route::get('/usine/lieu', function () {
    return view('usine/lieu');
});

Route::get('/usine/association', function () {
    return view('usine/association');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/actualites/blah', function () {
    return view('actualites/blah');
});

Route::get('/actualites/vox-usini', function () {
    return view('actualites/vox-usini');
});

Route::get('/actualites/annonces', function () {
    return view('actualites/annonces');
});

Route::get('/renseignements/contact', function () {
    return view('renseignements/contact');
});

Route::get('/renseignements/acces', function () {
    return view('renseignements/acces');
});
