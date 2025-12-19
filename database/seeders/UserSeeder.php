<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'nis' => '123',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'User',
            'nis' => '124',
            'password' => Hash::make('123456'),
        ]);
    }
}
