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
Route::get('/web_make', function () {
    return view('web_make');
});
Route::get('/logo_make', function () {
    return view('logo_make');
});
Route::get('/system_make', function () {
    return view('system_make');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/recruit', function () {
    return view('recruit');
});
Route::get('/tyuumon_form', function () {
    return view('tyuumon_form');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
