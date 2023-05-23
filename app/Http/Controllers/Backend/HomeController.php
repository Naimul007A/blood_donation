<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    public function login(): View|Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view( "admin.login" );
    }
    public function loginProcess( Request $request ): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->except( "_token" );
        if ( Auth::attempt( $credentials ) ) {
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
    public function dashboard(): View|Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view( "admin.dashboard" );
    }
    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        return redirect()->route( "admin.login" );
    }
}
