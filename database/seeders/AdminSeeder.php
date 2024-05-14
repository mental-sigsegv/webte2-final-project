<?php

namespace Database\Seeders;

use App\Enums\Permissions;
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
        User::create([
            'name' => 'Admin User',
            'login' => 'admin',
            'password' => 'password',
            'role' => Permissions::Admin,
        ]);

        User::create([
            'name' => 'User',
            'login' => 'user',
            'password' => 'password',
            'role' => Permissions::User,
        ]);
    }
}
