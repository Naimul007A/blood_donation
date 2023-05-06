<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $citys = [
            ['name' => 'Dhaka', 'slug' => 'dhaka'],
            ['name' => 'Bogura', 'slug' => 'bogura'],
            ['name' => 'Rajshahi', 'slug' => 'rajshahi'],
            ['name' => 'Rangpur', 'slug' => 'rangpur'],
        ];
        City::insert( $citys );
    }
}