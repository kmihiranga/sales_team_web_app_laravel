<?php

namespace Database\Seeders;

use App\Models\CurrentRoute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrentRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CurrentRoute::factory()->trashed()->count(50)->create();
    }
}
