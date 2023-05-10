<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    public function login() {
        return view( "admin.login" );
    }
    public function loginProccess( Request $request ) {
        $credencials = $request->except( "_token" );
        if ( Auth::attempt( $credencials ) ) {
            if ( Auth::user()->role == 1 ) {
                return redirect()->route( "admin.dashboard" );
            } else {
                Auth::logout();
                session()->flash( 'message', "Invalid Email or password !" );
                session()->flash( 'type', "danger" );
                return redirect()->back()->withInput();
            }
        } else {
            session()->flash( 'message', "Invalid Email or password !" );
            session()->flash( 'type', "danger" );
            return redirect()->back()->withInput();
        }

    }
    public function dashboard() {
        return view( "admin.dashboard" );
    }
    public function logout() {
        Auth::logout();
        return redirect()->route( "admin.login" );
    }
}