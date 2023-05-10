<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AdminSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $format = [
            ['name' => 'Naimul Islam', 'role' => 1, 'email' => 'mdnaimul2090@gmail.com', 'password' => bcrypt( 'admin' ), 'city_id' => '1', 'phone' => '01784016727', 'created_at' => Carbon::now()],
        ];
        User::insert( $format );
    }
}