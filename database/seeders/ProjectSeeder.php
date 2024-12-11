<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $projects = [
            ['name' => 'Market Project', 'description' => 'This project seeks to build a market for the community'],
            ['name' => 'School Project', 'description' => 'This project seeks to build a school for the community'],
            ['name' => 'Clinic Project', 'description' => 'This project seeks to build a clinic for the community'],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
