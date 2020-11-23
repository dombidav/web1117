<?php

namespace Database\Seeders;

use Database\Factories\BuildingFactory;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BuildingFactory::new()->count(10)->create();
    }
}
