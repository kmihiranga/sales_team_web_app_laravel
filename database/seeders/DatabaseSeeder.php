<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CurrentRoute;
use Illuminate\Database\Seeder;
use Database\Seeders\SalesTeamSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CurrentRouteSeeder::class,
            SalesTeamSeeder::class,
        ]);
    }
}
