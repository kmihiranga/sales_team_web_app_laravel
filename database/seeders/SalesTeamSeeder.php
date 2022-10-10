<?php

namespace Database\Seeders;

use App\Models\CurrentRoute;
use App\Models\SalesTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentRoutes = CurrentRoute::factory()->create();

        SalesTeam::factory()
            ->count(50)
            ->for($currentRoutes)
            ->create();
    }
}
