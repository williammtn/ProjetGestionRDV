<?php

namespace Database\Seeders;

use App\Models\Forfait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Factories\ForfaitFactory;

class ForfaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forfait::factory()
        ->count(5)
        ->create();
    }
}
