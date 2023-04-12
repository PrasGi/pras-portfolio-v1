<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create([
            'name' => 'Laravel',
            'persentase' => '90',
        ]);
        Skill::create([
            'name' => 'Java',
            'persentase' => '90',
        ]);
        Skill::create([
            'name' => 'Javascript',
            'persentase' => '70',
        ]);
    }
}
