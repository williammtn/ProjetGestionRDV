<?php

namespace Database\Seeders;

use App\Models\Prestation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PrestationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //niveau
        $oreilles = "Cheveux au niveau des oreilles";
        $epaules = "Cheveux aux épaules";
        $dessousepaules = "Cheveux en dessous des épaules";
        
        //type
        $courts = "Cheveux Courts";
        $milongs = "Cheveux mi-longs";
        $longs = "Cheveux Longs";

        //prestations
        $shampbrush = "Shampooing + Brushing ";
        $shampcoupebrush = "Shampooing Coupe Brushing - ";
        $coloshampcoupebrush = "Coloration + Shampooing Brushing - ";
        $coloshampbrush = "Coloration + Shampooing Brushing - ";
        $mechesshampbrush = "Mèches + Shampooing Brushing - ";
        $mechesshampcoupebrush = "Mèches + Shampooing Coupe Brushing - ";

        Prestation::factory([
            'description'=>$shampbrush.$courts,
            'complement' => $oreilles,
            'prix'=>22,
            'temps'=>30,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$shampbrush.$milongs,
            'complement' => $epaules,
            'prix'=>27,
            'temps'=>30,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$shampbrush.$longs,
            'complement' => $dessousepaules,
            'prix'=>30,
            'temps'=>40,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>"Shampooing séchage boucle",
            'complement' => $dessousepaules,
            'prix'=>39,
            'temps'=>45,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$shampcoupebrush.$courts,
            'complement' => $oreilles,
            'prix'=>33,
            'temps'=>45,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$shampcoupebrush.$milongs,
            'complement' => $epaules,
            'prix'=>38,
            'temps'=>45,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$shampcoupebrush.$longs,
            'complement' => $dessousepaules,
            'prix'=>41,
            'temps'=>60,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$coloshampcoupebrush.$courts,
            'complement' => $oreilles,
            'prix'=>53,
            'temps'=>90,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$coloshampcoupebrush.$milongs,
            'complement' => $epaules,
            'prix'=>63,
            'temps'=>90,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$coloshampbrush.$longs,
            'complement' => $dessousepaules,
            'prix'=>70,
            'temps'=>110,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$coloshampcoupebrush.$courts,
            'complement' => $oreilles,
            'prix'=>64,
            'temps'=>105,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$coloshampcoupebrush.$milongs,
            'complement' => $epaules,
            'prix'=>72,
            'temps'=>105,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$coloshampcoupebrush.$longs,
            'complement' =>$dessousepaules,
            'prix'=>78,
            'temps'=>125,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$mechesshampbrush.$courts,
            'complement' =>$oreilles,
            'prix'=>60,
            'temps'=>120,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$mechesshampbrush.$milongs,
            'complement' =>$epaules,
            'prix'=>73,
            'temps'=>120,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$mechesshampbrush.$longs,
            'complement' =>$dessousepaules,
            'prix'=>84,
            'temps'=>150,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$mechesshampcoupebrush.$courts,
            'complement' =>$oreilles,
            'prix'=>71,
            'temps'=>135,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$mechesshampcoupebrush.$milongs,
            'complement' =>$epaules,
            'prix'=>84,
            'temps'=>135,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        /*Prestation::factory()
        ->count(30)
        ->create();*/
    }
}
