<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::factory([
            'nom'=>"Les forfaits femmes - Brushing",
            'ordre' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Section::factory([
            'nom'=>"Les forfaits femmes - Coupe Brushing",
            'ordre' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Section::factory([
            'nom'=>"Les forfaits - Coloration",
            'ordre' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();
    }
}
