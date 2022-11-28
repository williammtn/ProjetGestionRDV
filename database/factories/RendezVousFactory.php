<?php

namespace Database\Factories;

use DateTime;
use DateInterval;
use App\Models\Forfait;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RendezVous>
 */
class RendezVousFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   $startDate = "2022-09-01";  // or 'now'
        $nbDays = 30;
        $forfaits_id = Forfait::all()->pluck('id');
        return [
            'daterdv'=> (new DateTime($startDate))->add(new DateInterval('P'.$this->faker->numberBetween(0,$nbDays).'D'))->format('Y-m-d'),
            'heurerdv'=>$this->faker->randomElement(['08','09','10','11','12','13','14','15','16','17','18','19']).":".$this->faker->randomElement(['00:00','30:00']),
            'idforfait'=>$this->faker->randomElement($forfaits_id),
        ];
    }

}
