<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Forfait;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestation>
 */
class PrestationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description'=>fake()->text(),
            'prix'=>fake()->numberBetween($min = 10, $max=30),
            'temps'=>fake()->numberBetween($min = 5, $max = 50),
            'idforfait'=>Forfait::inRandomOrder()->first()->id,
        ];
    }
}
