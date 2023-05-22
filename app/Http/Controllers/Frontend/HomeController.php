<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Group;

class HomeController extends Controller {
    public function home(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $cities = City::orderBy( "name", "asc" )->get();
        $groups = Group::all();
        return view( "welcome", compact( 'cities', 'groups' ) );
    }
}
