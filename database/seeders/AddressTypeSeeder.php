<?php

namespace Database\Seeders;

use App\Models\AddressType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddressTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addressTypes = [
            ['name' => 'Home',  ],
            ['name' => 'Office', ],
            ['name' => 'Others', ],
        ];

        foreach ($addressTypes as $type) {
            AddressType::create($type);
        }
    }
}
