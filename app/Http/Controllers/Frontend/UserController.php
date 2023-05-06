<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    public function login() {
        return view( "login" );
    }
    public function loginProccess( Request $request ) {
        $credentials = $request->except( 'role' );
        if ( Auth::attempt( $credentials ) ) {
            return true;
        } else {
            return "password not match";
        }
    }
    public function registration() {
        return view( "registration" );
    }
    public function logout() {
        Auth::logout();
        return redirect()->route( 'home' );
    }
}