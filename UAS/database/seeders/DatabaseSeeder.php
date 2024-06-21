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

        $booking = [
            [
                'name' => 'Nath',
                'email'  => 'nath@gmail.com',
                'mobile' => '081273061661',
                'service' => 'Photoshoot',
                'booking_date' => '2024/08/25',
            ],
        ];

        Booking::insert($booking);
    }
}
