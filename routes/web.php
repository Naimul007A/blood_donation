<?php

use App\Http\Controllers\Frontend\DonorController;
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

Route::get( "/donor/list", [DonorController::class, 'donorList'] )->name( "donorList" );
Route::middleware( "auth" )->controller( DonorController::class )->group( function () {
    Route::get( "/donor/profile/{id}", 'donor' )->name( "profile.donor" );
} );

Route::prefix( "user" )->name( "user." )->middleware( "auth" )->controller( UserController::class )->group( function () {
    Route::get( "/profile/edit", 'edit' )->name( 'edit' );
    Route::post( "/profile/edit", 'update' )->name( 'update' );
    Route::get( "/profile", 'profile' )->name( 'profile' );
    Route::get( "/logout", 'logout' )->name( 'logout' );

} );