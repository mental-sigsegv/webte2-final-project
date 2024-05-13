<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hashedPassword = Hash::make('password');
        User::factory()->create([
            'name' => 'Admin User',
            'login' => 'admin',
            'password' => $hashedPassword,
            'role' => 'Admin',
        ]);

        User::factory()->create([
            'name' => 'User',
            'login' => 'user',
            'password' => 'password',
            'role' => 'User',
        ]);
    }
}
