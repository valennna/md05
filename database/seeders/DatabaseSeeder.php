<?php

namespace Database\Seeders;

use App\Models\Cards;
use App\Models\Desk;
use App\Models\Lists;
use App\Models\Tasks;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Desk::factory(5)->create();
        Lists::factory(5)->create();
        Cards::factory(5)->create();
        Tasks::factory(5)->create();
        
        // \App\Models\User::factory(10)->create();
    }
}
