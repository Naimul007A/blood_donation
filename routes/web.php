<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Route;

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

Route::controller( HomeController::class )->group( function () {
    Route::get( "/", 'home' )->name( 'home' );
} );
Route::prefix( "user" )->middleware( "guest" )->controller( UserController::class )->group( function () {
    Route::get( "/login", 'login' )->name( 'user.login' );
    Route::post( "/login", 'loginProccess' )->name( 'user.loginProccess' );
    Route::get( "/registration", 'registration' )->name( "user.registration" );
    Route::Post( "/registration", 'registrationProccess' )->name( "user.registrationProccess" );
} );