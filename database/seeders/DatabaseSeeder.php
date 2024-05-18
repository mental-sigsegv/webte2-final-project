<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (App::environment('local')) {
            $this->call([
                AdminSeeder::class,
                UserSeeder::class,
            ]);
        }

        $this->call([
            Production::class,
        ]);
    }
}
