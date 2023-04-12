<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'title' => 'Bachelor Engenering Informatics',
            'position' => 'University Islamic of Malang State',
            'date' => '2021 continue',
            'description' => 'Every year, the number of people using the Internet is increased to twice that of the previous year. Also, the increase in various internet-enabled devices like Mobile, Tablet, PC, and TV have turned over a new era in the progress of Web development.',
        ]);
    }
}