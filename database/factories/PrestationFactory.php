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
            'description'=>$this->faker->text(),
            // 'complement'=>$this->faker->text(),
            // 'prix'=>$this->faker->numberBetween($min = 10, $max=30),
            // 'temps'=>$this->faker->numberBetween($min = 5, $max = 50),
            // 'reservable'=>$this->faker->boolean(),
        ];
    }
}
