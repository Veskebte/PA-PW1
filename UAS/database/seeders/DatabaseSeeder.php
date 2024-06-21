<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = [
            [
                'email' => 'admin@gmail.com',
                'name'  => 'AkunAdmin',
                'level' => 'admin',
                'password' => Hash::make('123456')
            ],
        ];

        User::insert($user);
    }
}
