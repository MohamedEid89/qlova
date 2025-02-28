<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            ['name' => 'Downtown', 'city_id' => 1, 'slug' => 'downtown'],
            ['name' => 'Uptown', 'city_id' => 1, 'slug' => 'uptown'],
            ['name' => 'Hollywood', 'city_id' => 2, 'slug' => 'hollywood'],
            ['name' => 'Beverly Hills', 'city_id' => 2, 'slug' => 'beverly-hills'],
            ['name' => 'The Loop', 'city_id' => 3, 'slug' => 'the-loop'],
            ['name' => 'Midtown', 'city_id' => 3, 'slug' => 'midtown'],
        ];

        foreach ($areas as $area) {
            Area::create($area);
        }
    }
}
