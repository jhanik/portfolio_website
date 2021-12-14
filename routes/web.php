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

Route::get('/', function () {
    return view('index');
});
Route::get('/portfolio-1', function () {
    return view('portfolio-1');
});

Route::get('/portfolio-2', function () {
    return view('portfolio-2');
});

Route::get('/portfolio-3', function () {
    return view('portfolio-3');
});

Route::get('/portfolio-4', function () {
    return view('portfolio-4');
});

Route::get('/portfolio-5', function () {
    return view('portfolio-5');
});

Route::get('/portfolio-6', function () {
    return view('portfolio-6');
});

Route::get('/portfolio-7', function () {
    return view('portfolio-7');
});

Route::get('/portfolio-8', function () {
    return view('portfolio-8');
});
Route::get('/portfolio-9', function () {
    return view('portfolio-9');
});
Route::get('/portfolio-10', function () {
    return view('portfolio-10');
});

Route::post('/','ContactFormController@store')->name('contact.store');