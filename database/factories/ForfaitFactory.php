<?php

namespace Database\Factories;

use App\Models\Section;
use App\Models\Prestation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forfait>
 */
class ForfaitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $prestations_id = Prestation::all()->pluck('id');
        $section_id = Section::all()->pluck('id');
        return [
            'description'=>fake()->text(),
            'complement'=>$this->faker->text(),
            'prix'=>$this->faker->numberBetween($min = 10, $max=30),
            'temps'=>$this->faker->numberBetween($min = 5, $max = 50),
            'reservable'=>$this->faker->boolean(),
            'idprestation'=>$this->faker->randomElement($prestations_id),
            'idsection'=>$this->faker->randomElement($section_id),
        ];
    }
}
