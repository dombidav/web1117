<?php

namespace Database\Seeders;

use Database\Factories\ClassroomFactory;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassroomFactory::new()->count(10)->create();
    }
}
