<?php

namespace Database\Seeders\Local;

use App\Enums\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'role' => Roles::Admin,
        ]);

        User::create([
            'name' => 'User',
            'login' => 'user',
            'password' => 'password',
            'role' => Roles::User,
        ]);
    }
}
