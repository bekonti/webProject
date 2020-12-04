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
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\AuthController;
//Route::get('/', 'MainController@home');
//Route::get('/', [MainController::class, 'home']);
Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/order', [MainController::class, 'tickets'])->name('tickets');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/signup', [AuthController::class, 'getSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'postSignup']);

