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
        $shampbrush = "Shampooing + Brushing - ";
        $shampcoupebrush = "Shampooing Coupe Brushing - ";
        $coloshampcoupebrush = "Coloration + Shampooing Brushing - ";
        $coloshampbrush = "Coloration + Shampooing Brushing - ";
        $mechesshampbrush = "Mèches + Shampooing Brushing - ";
        $mechesshampcoupebrush = "Mèches + Shampooing Coupe Brushing - ";
        $mechepatine = "Mèches + Patine + ";
        $ombre = "Ombre Hair + ";
        $permanante = "Permanante - ";
        $coupecoiff = "Coupe Coiffage";
        $shampcoupecoiff = "Shampooing Coupe Coiffage";
        $rasage = "Rasage à l'Ancienne";
        $shampcoupeenfant = "Shampooing + coupe enfant ";
        $bebe = "0 à 5 ans ";
        $enfant = "6 à 12 ans ";
        $ado = "13 à 18 ans ";
        $fille = "filles";
        $colopatine = "Coloration + Patine + ";

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

        Prestation::factory([
            'description'=>$mechesshampcoupebrush.$longs,
            'complement' =>$dessousepaules,
            'prix'=>95,
            'temps'=>155,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>"Mèches demi tête + ".$shampcoupebrush."Flash",
            'complement' =>$epaules,
            'prix'=>54,
            'temps'=>105,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$mechepatine.$shampcoupebrush.$courts,
            'complement' =>$oreilles,
            'prix'=>85,
            'temps'=>150,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$mechepatine.$shampcoupebrush.$milongs,
            'complement' =>$epaules,
            'prix'=>104,
            'temps'=>150,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$mechepatine.$shampcoupebrush.$longs,
            'complement' =>$dessousepaules,
            'prix'=>123,
            'temps'=>170,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$mechepatine.$shampbrush.$courts,
            'complement' =>$oreilles,
            'prix'=>74,
            'temps'=>135,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$mechepatine.$shampbrush.$milongs,
            'complement' =>$epaules,
            'prix'=>93,
            'temps'=>150,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$mechepatine.$shampbrush.$longs,
            'complement' =>$dessousepaules,
            'prix'=>112,
            'temps'=>165,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$ombre.$shampbrush.$milongs,
            'complement' =>$epaules,
            'prix'=>93,
            'temps'=>135,
            'reservable'=>false,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$ombre.$shampbrush.$longs,
            'complement' =>$dessousepaules,
            'prix'=>112,
            'temps'=>135,
            'reservable'=>false,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$ombre.$shampcoupebrush.$milongs,
            'complement' =>$epaules,
            'prix'=>104,
            'temps'=>135,
            'reservable'=>false,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$ombre.$shampcoupebrush.$longs,
            'complement' =>$dessousepaules,
            'prix'=>123,
            'temps'=>150,
            'reservable'=>false,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>"Coloration + Mèches Coupe Brushing",
            'complement' =>$oreilles,
            'prix'=>85,
            'temps'=>115,
            'reservable'=>false,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>"Coloration".$mechepatine."Coupe Brushing",
            'complement' =>$oreilles,
            'prix'=>85,
            'temps'=>160,
            'reservable'=>false,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$permanante.$courts,
            'complement' =>"",
            'prix'=>67,
            'temps'=>105,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$permanante.$milongs,
            'complement' =>"",
            'prix'=>82,
            'temps'=>110,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$coupecoiff,
            'complement' =>"",
            'prix'=>20,
            'temps'=>30,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$shampcoupecoiff,
            'complement' =>"",
            'prix'=>22,
            'temps'=>30,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$rasage,
            'complement' =>"",
            'prix'=>23,
            'temps'=>60,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>"Taille de barbe gratuit",
            'complement' =>"",
            'prix'=>0,
            'temps'=>15,
            'reservable'=>false,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$shampcoupecoiff." + ".$rasage,
            'complement' =>"",
            'prix'=>45,
            'temps'=>75,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>"Coloration cover 5 shampooing coupe",
            'complement' =>"",
            'prix'=>38,
            'temps'=>30,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>"Diacolor ".$shampcoupecoiff,
            'complement' =>"",
            'prix'=>47,
            'temps'=>50,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$permanante.$coupecoiff,
            'complement' =>"",
            'prix'=>53,
            'temps'=>65,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$shampcoupeenfant.$bebe.$fille,
            'complement' =>"",
            'prix'=>15,
            'temps'=>20,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$shampcoupeenfant.$enfant.$fille,
            'complement' =>"",
            'prix'=>20,
            'temps'=>30,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$shampcoupeenfant.$ado.$fille,
            'complement' =>"",
            'prix'=>24,
            'temps'=>30,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>"Décoloration patine coupe brush - ".$courts,
            'complement' =>"",
            'prix'=>78,
            'temps'=>150,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>"Chignon sophistiqué",
            'complement' =>"Sur devis",
            'prix'=>0,
            'temps'=>60,
            'reservable'=>false,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>"Tresses",
            'complement' =>"Sur devis",
            'prix'=>0,
            'temps'=>30,
            'reservable'=>false,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$colopatine.$shampbrush.$courts,
            'complement' =>$oreilles,
            'prix'=>53,
            'temps'=>150,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$colopatine.$shampbrush.$milongs,
            'complement' =>$epaules,
            'prix'=>63,
            'temps'=>150,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$colopatine.$shampbrush.$longs,
            'complement' =>$dessousepaules,
            'prix'=>70,
            'temps'=>155,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$colopatine.$shampcoupebrush.$courts,
            'complement' =>$oreilles,
            'prix'=>64,
            'temps'=>165,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        Prestation::factory([
            'description'=>$colopatine.$shampcoupebrush.$milongs,
            'complement' =>$epaules,
            'prix'=>72,
            'temps'=>165,
            'reservable'=>true,
            'created_at' => now(),
            'updated_at' => now(),
        ])->create();

        /*Prestation::factory()
        ->count(30)
        ->create();*/
    }
}
