<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Group;

class HomeController extends Controller {
    public function home() {
        $cities = City::orderBy( "name", "asc" )->get();
        $groups = Group::all();
        return view( "welcome", compact( 'cities', 'groups' ) );
    }
}