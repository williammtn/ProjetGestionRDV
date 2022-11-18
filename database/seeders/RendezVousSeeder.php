<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RendezVous;
use Database\Factories\RendezVousFactory;
  
class RendezVousSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RendezVous::factory()
            ->count(30)
            ->create()
        ;
    }
}