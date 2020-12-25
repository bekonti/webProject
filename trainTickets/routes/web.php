<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Route
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

Route::get('/order', [MainController::class, 'tickets'])->name('ticketss');
Route::post('/order', [MainController::class, 'ticketss']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', [MainController::class, 'base'])->name('base');


Route::get('/signup', [AuthController::class, 'getSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'postSignup']);

Route::get('/signin', [AuthController::class, 'getSignin'])->name('signin');
Route::post('/signin', [AuthController::class, 'postSignin']);

Route::post('/signout',[AuthController::class, 'getSignout'])->name('signout');


Route::get('/admin',[MainController::class, 'admin'])->name('admin');

Route::get('/allStations',[MainController::class, 'allStations'])->name('allStations');
Route::get('/allTrains',[MainController::class, 'allTrains'])->name('allTrains');
Route::get('/allRoutes',[MainController::class, 'allRoutes'])->name('allRoutes');



Route::get('/addTrain', [MainController::class, 'addTrainGET'])->name('addTrain');
Route::post('/addTrain', [MainController::class, 'addTrain']);

Route::get('/addRoute', [MainController::class, 'addRouteGET'])->name('addRoute');
Route::post('/addRoute', [MainController::class, 'addRoute']);

Route::get('/addStation', [MainController::class, 'addStationGET'])->name('addStation');
Route::post('/addStation', [MainController::class, 'addStation']);
