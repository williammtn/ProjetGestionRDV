<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use DateTime;
use DateInterval;
use App\Models\Forfait;
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

        $users_id = User::all()->pluck('id');
        $forfaits_id = Forfait::all()->pluck('id');
        return [
            'daterdv'=> (new DateTime($startDate))->add(new DateInterval('P'.$this->faker->numberBetween(0,$nbDays).'D'))->format('Y-m-d'),
            'heurerdv'=>$this->faker->randomElement(['08','09','10','11','12','13','14','15','16','17','18','19']).":".$this->faker->randomElement(['00:00','30:00']),
            'idforfait'=>$this->faker->randomElement($forfaits_id),
            'iduser'=>$this->faker->randomElement($users_id),
        ];
    }

}
