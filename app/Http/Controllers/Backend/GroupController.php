<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $groups = Group::all();
        return view( "admin.group", compact( 'groups' ) );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $Creadinsial = [
            'name' => $request->group_name,
        ];
        Group::create( $Creadinsial );
        return true;
        info( "hit" );
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id ) {

        $group = Group::where( 'id', $id )->first();
        return $group;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id ) {
        $group       = Group::findOrFail( $id );
        $group->name = $request->up_group_name;
        $group->update();
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ): bool{
        Group::destroy( $id );
        return true;
    }
}