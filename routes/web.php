<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/message', function () {
    return "Hello, I'm using the laravel framework version 10";
});

Route::get('/message/{name}', function ($name) {
    return "Hello, I'm $name";
});

Route::get('/message-v2/guest/{name?}', function ($name = "Usuario visitante, no identificado") {
    return "Hello, I'm $name";
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::get('/', return function() {
   // return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
