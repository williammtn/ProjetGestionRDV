<?php

namespace Database\Seeders;

use App\Models\Prestation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrestationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestation::factory()
        ->count(30)
        ->create();
    }
}
