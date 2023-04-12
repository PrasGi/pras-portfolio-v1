<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'title' => 'Inagata',
            'position' => 'Backend Developer | Internship',
            'date' => '16 January 2023 to 16 April 2023',
            'description' => 'I use Laravel and mysql technologi for do my jobs in here'
        ]);

        Experience::create([
            'title' => 'Konsulin Aja',
            'position' => 'Backend Developer | Junior',
            'date' => '2022 to continue',
            'description' => 'I use Laravel and mysql technologi for do my jobs in here'
        ]);
    }
}