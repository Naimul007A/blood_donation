<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Mockery\Expectation;

class UserController extends Controller {
    public function login() {
        return view( "login" );
    }
    public function loginProccess( Request $request ) {
        $credentials = $request->except( 'role' );
        if ( Auth::attempt( $credentials ) ) {
            if ( Auth::user()->role == 1 ) {
                Auth::logout();
                return false;
            } else {
                return true;
            }

        } else {
            return false;
        }
    }
    public function registration() {
        $cities = City::orderBy( "name", "asc" )->get();
        $groups = Group::all();
        return view( "registration", compact( 'cities', 'groups' ) );
    }
    public function registrationProccess( Request $request ) {

        $validetor = Validator::make( $request->all(), [
            'name'  => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
        ] );
        if ( $validetor->fails() ) {
            return redirect()->back()->withErrors( $validetor )->withInput();
        }
        $file = $request->profile;
        if ( $file ) {
            $imagename = "user-profile-" . rand( 1000, 10000 ) . "." . $file->getClientOriginalExtension();
            //Move Uploaded File
            $destinationPath = 'uploads';
            $file->move( $destinationPath, $imagename );
        } else {
            $imagename = "";
        }
        if ( $request->donor ) {
            $formdata = [
                'name'     => trim( $request->name ),
                'email'    => $request->email,
                'phone'    => $request->phone,
                'password' => bcrypt( $request->password ),
                'group_id' => $request->group,
                'city_id'  => $request->city,
                'image'    => $imagename,
                'role'     => 2,
            ];
        } else {
            $formdata = [
                'name'     => trim( $request->name ),
                'email'    => $request->email,
                'phone'    => $request->phone,
                'group_id' => $request->group,
                'city_id'  => $request->city,
                'password' => bcrypt( $request->password ),
                'image'    => $imagename,
            ];
        }
        try {
            $user = User::create( $formdata );
            session()->flash( 'message', "account create successfully" );
            session()->flash( 'type', 'success' );

            $credentials = [
                'email'    => $user->email,
                'password' => $request->password,
            ];

            Auth::attempt( $credentials );
            return redirect()->route( "home" );
        } catch ( Expectation $e ) {
            return redirect()->back()->withInput();
        }
    }
    public function profile() {
        $user_id = Auth::user()->id;
        $user    = User::where( 'id', $user_id )->with( 'City', 'Group' )->first();
        return view( "userProfile", compact( 'user' ) );
    }
    public function edit() {
        $cities = City::orderBy( "name", "asc" )->get();
        $groups = Group::all();
        return view( "userProfileEdit", compact( 'cities', 'groups' ) );

    }
    public function update( Request $request ) {

        $validetor = Validator::make( $request->all(), [
            'name'  => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ] );
        if ( $validetor->fails() ) {
            return redirect()->back()->withErrors( $validetor )->withInput();
        }
        $file = $request->profile;
        if ( $file ) {
            $imagename = "user-profile-" . rand( 1000, 10000 ) . "." . $file->getClientOriginalExtension();
            //Move Uploaded File
            $destinationPath = 'uploads';
            $file->move( $destinationPath, $imagename );
        } else {
            $imagename = $request->old_profile;
        }
        if ( $request->donor ) {
            $formdata = [
                'name'     => trim( $request->name ),
                'email'    => $request->email,
                'phone'    => $request->phone,
                'group_id' => $request->group,
                'city_id'  => $request->city,
                'role'     => 2,
            ];
        } elseif ( Auth::user()->role == 2 ) {
            $formdata = [
                'name'        => trim( $request->name ),
                'email'       => $request->email,
                'phone'       => $request->phone,
                'group_id'    => $request->group,
                'city_id'     => $request->city,
                'state'       => $request->state,
                'address'     => $request->address,
                'image'       => $imagename,
                'last_donate' => $request->date,
            ];
        } else {
            $formdata = [
                'name'     => trim( $request->name ),
                'email'    => $request->email,
                'phone'    => $request->phone,
                'group_id' => $request->group,
                'city_id'  => $request->city,
            ];
        }
        try {
            User::find( Auth::user()->id )->update( $formdata );
            session()->flash( 'message', "Data update Successfully" );
            session()->flash( 'type', 'success' );
            return redirect()->back();
        } catch ( Expectation $e ) {
            return redirect()->back();
        }

    }
    public function logout() {
        Auth::logout();
        return redirect()->route( 'home' );
    }
}