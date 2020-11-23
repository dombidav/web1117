<?php

namespace Database\Seeders;

use Database\Factories\CampusFactory;
use Illuminate\Database\Seeder;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CampusFactory::new()->count(10)->create();
    }
}
