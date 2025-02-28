<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use App\Models\Address;
use App\Models\AddressType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $cities = City::all();
        $addressTypes = AddressType::all();


        foreach ($users as $user) {
            Address::create([
                'user_id' => $user->id,
                'address_type_id' => $addressTypes->random()->id,
                'city_id' => $cities->random()->id,
                'address_1' => '123 Main St',
                'building_no' => 'A1',
                'lat' => rand(1, 90),
                'lng' => rand(1, 180),
            ]);
        }
    }
}
