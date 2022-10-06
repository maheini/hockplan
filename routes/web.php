<?php

use App\Http\Controllers\UserController;
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
    return view('home');
});


// Auth protected routes
Route::group(['middleware' => 'auth'], function(){
    Route::get('/account', [UserController::class, 'showAccountpage']);
    Route::get('/account/plaene', [UserController::class, 'showPlaenepage']);
    Route::get('/logout', [UserController::class, 'logout']);
});

// Auth protected routes
Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', [UserController::class, 'showLoginpage'])->name('login');
    Route::get('/registerieren', [UserController::class, 'showRegisterpage']);
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
});



