<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DonorController extends Controller {
    public function donorList( Request $request ): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $donors = User::where( 'city_id', $request->city )
            ->where( 'group_id', $request->group )
            ->where( 'role', 2 )->with( 'City', 'Group' )->get();
        return view( "donorList", compact( "donors" ) );
    }
    public function donor( $id ) {
        $donor = User::where( "id", $id )->first();
        return view( "donor", compact( "donor" ) );
    }
}
