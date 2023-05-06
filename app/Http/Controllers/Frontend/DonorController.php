<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DonorController extends Controller {
    public function donorList( Request $request ) {

        $donors = User::where( 'city', $request->city )->where( 'blood_group', $request->group )->get();
        return view( "donorList", compact( "donors" ) );
    }
}