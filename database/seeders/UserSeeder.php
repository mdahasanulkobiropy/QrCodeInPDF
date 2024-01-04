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
        User::create([
            'name' => 'Nazmul',
            'email' => 'nazmul@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'name' => 'Opy',
            'email' => 'opy@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'name' => 'Shamim',
            'email' => 'shamim@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'name' => 'Zia',
            'email' => 'zia@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
