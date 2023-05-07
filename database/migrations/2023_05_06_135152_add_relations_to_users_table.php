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
            $table->string( 'last_donate', 120 );
            $table->foreign( 'city_id' )->references( 'id' )->on( 'cities' )->onDelete( 'cascade' );
            $table->foreign( 'group_id' )->references( 'id' )->on( 'groups' )->onDelete( 'cascade' );
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