<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $Users = [
            ['name' => 'Naimul Islam', 'email' => 'naimul@gmail.com', 'password' => bcrypt( '12345' ), 'group_id' => '1', 'city_id' => '1', 'phone' => '01784016727', 'last_donate' => Carbon::today()->toDateString(),'created_at' => Carbon::now()],
            ['name' => 'Abir', 'email' => 'abir@gmail.com', 'password' => bcrypt( '12345' ), 'group_id' => '2', 'city_id' => '2', 'phone' => '01784016728', 'last_donate' => Carbon::today()->toDateString(),'created_at' => Carbon::now()],
            ['name' => 'Hanjala', 'email' => 'hanjala@gmail.com', 'password' => bcrypt( '12345' ), 'group_id' => '3', 'city_id' => '2', 'phone' => '01784016702', 'last_donate' => Carbon::today()->toDateString(),'created_at' => Carbon::now()],
            ['name' => 'Islam', 'email' => 'islam@gmail.com', 'password' => bcrypt( '12345' ), 'group_id' => '4', 'city_id' => '1', 'phone' => '01784016772', 'last_donate' => Carbon::today()->toDateString(),'created_at' => Carbon::now()],
            ['name' => 'Naimul', 'email' => 'naimul11@gmail.com', 'password' => bcrypt( '12345' ), 'group_id' => '5', 'city_id' => '1', 'phone' => '01784016774', 'last_donate' => Carbon::today()->toDateString(),'created_at' => Carbon::now()],
        ];
        User::insert( $Users );
    }
}