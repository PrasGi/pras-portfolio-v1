<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'image' => null,
            'name_project' => 'Life Tree',
            'name_company' => 'Inagata',
            'description' => 'Create server aplication user Laravel ang MySQL',
            'link' => 'https://www.google.com',
        ]);
    }
}
