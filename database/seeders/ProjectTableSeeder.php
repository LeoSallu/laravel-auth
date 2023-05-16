<?php

namespace Database\Seeders;

use APP\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::all();
        for($i=0;$i<30;$i++){
            $new_project= new Project();
        }
    }
}
