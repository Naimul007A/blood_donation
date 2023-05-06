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
Route::prefix( "user" )->name( "user." )->middleware( "guest" )->controller( UserController::class )->group( function () {
    Route::get( "/login", 'login' )->name( 'login' );
    Route::post( "/login", 'loginProccess' )->name( 'loginProccess' );
    Route::get( "/registration", 'registration' )->name( "registration" );
    Route::Post( "/registration", 'registrationProccess' )->name( "registrationProccess" );
} );