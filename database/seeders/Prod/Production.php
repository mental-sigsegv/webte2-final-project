<?php

namespace Database\Seeders\Prod;

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
            'password' => 'C8Rc43Ze5m3t5ccP',
            'role' => Roles::Admin,
        ]);

        User::create([
            'name' => 'User',
            'login' => 'ProductionUser',
            'password' => 'C8Rc43Ze5m3t5ccP',
            'role' => Roles::User,
        ]);
    }
}
