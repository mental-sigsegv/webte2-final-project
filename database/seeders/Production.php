<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;

class Production extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'login' => 'ProductionAdmin',
            'password' => '',
            'role' => Roles::Admin,
        ]);

        User::create([
            'name' => 'User',
            'login' => 'ProductionUser',
            'password' => '',
            'role' => Roles::User,
        ]);
    }
}
