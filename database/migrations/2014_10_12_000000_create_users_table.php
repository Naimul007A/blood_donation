<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create( 'users', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name', 150 );
            $table->string( 'email', 150 )->unique();
            $table->timestamp( 'email_verified_at' )->nullable();
            $table->string( 'password', 150 );
            $table->unsignedInteger( 'blood_group' )->nullable();
            $table->unsignedInteger( 'city' );
            $table->string( 'state', 120 )->nullable();
            $table->string( 'address' )->nullable();
            $table->string( 'image', 150 )->nullable();
            $table->string( 'phone', 15 );
            $table->tinyInteger( 'role' )->default( 0 );
            $table->rememberToken();
            $table->timestamps();

        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists( 'users' );
    }
};