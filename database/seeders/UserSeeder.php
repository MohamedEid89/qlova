<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@admin.com',
                'phone' => '+1234567890',
                'password' => Hash::make('123'),
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'name' => 'Vendor User',
                'email' => 'vendor@vendor.com',
                'phone' => '+0987654321',
                'password' => Hash::make('123'),
                'role' => 'vendor',
                'status' => 'active',
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@user.com',
                'phone' => '+1122334455',
                'password' => Hash::make('123'),
                'role' => 'user',
                'status' => 'active',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
