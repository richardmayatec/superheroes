<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superhero>
 */
class SuperheroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'hero_name'     =>  $this->faker->words(3, true),
            'real_name'     =>  $this->faker->name(),
            'gender'        =>  $this->faker->word(),
            'universe_id'   =>  $this->faker->numberBetween(1,3),
            'logo_id'       =>  $this->faker->numberBetween(1,20)
        ];
    }
}
