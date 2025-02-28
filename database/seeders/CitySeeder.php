<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\AddressType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $cities = [
            ['name' => 'New York', 'slug' => 'new-york'],
            ['name' => 'Los Angeles', 'slug' => 'los-angeles'],
            ['name' => 'Chicago', 'slug' => 'chicago'],
        ];
        DB::table('cities')->insert($cities);
    }
}
