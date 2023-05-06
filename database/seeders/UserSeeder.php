<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $Users = [
            ['name' => 'Naimul Islam', 'email' => 'naimul@gmail.com', 'password' => bcrypt( '12345' ), 'blood_group' => '1', 'city' => '1', 'phone' => '01784016727'],
            ['name' => 'Abir', 'email' => 'abir@gmail.com', 'password' => bcrypt( '12345' ), 'blood_group' => '2', 'city' => '2', 'phone' => '01784016728'],
            ['name' => 'Hanjala', 'email' => 'hanjala@gmail.com', 'password' => bcrypt( '12345' ), 'blood_group' => '3', 'city' => '2', 'phone' => '01784016702'],
            ['name' => 'Islam', 'email' => 'islam@gmail.com', 'password' => bcrypt( '12345' ), 'blood_group' => '4', 'city' => '1', 'phone' => '01784016772'],
            ['name' => 'Naimul', 'email' => 'naimul11@gmail.com', 'password' => bcrypt( '12345' ), 'blood_group' => '5', 'city' => '1', 'phone' => '01784016774'],
        ];
        User::insert( $Users );
    }
}