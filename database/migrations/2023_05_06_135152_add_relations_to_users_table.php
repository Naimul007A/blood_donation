<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::table( 'users', function ( Blueprint $table ) {
            $table->foreign( 'city' )->references( 'id' )->on( 'cities' )->onDelete( 'cascade' );
            $table->foreign( 'blood_group' )->references( 'id' )->on( 'groups' )->onDelete( 'cascade' );
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::table( 'users', function ( Blueprint $table ) {
            //
        } );
    }
};