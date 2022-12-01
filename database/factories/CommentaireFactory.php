<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Commentaire;
use DateTime;
use DateInterval;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaire>
 */
class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $startDate = "2022-09-01";  // or 'now'
        $nbDays = 30;
        $users_id = User::all()->pluck('id');
        return [
            'contenu'=>$this->faker->text(100),
            'date'=> (new DateTime($startDate))->add(new DateInterval('P'.$this->faker->numberBetween(0,$nbDays).'D'))->format('Y-m-d'),
            'note'=>$this->faker->numberBetween(0,5),
            'iduser'=>$this->faker->randomElement($users_id),
        ];
    }
}
