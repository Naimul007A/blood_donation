<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class UserController extends Controller {
    public function login() {
        return view( "login" );
    }
    public function registration() {
        return view( "registration" );
    }
}