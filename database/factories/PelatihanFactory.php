<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PelatihanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pelatihan' => $this->faker->name(),
            'slug'      => $this->faker->slug()
        ];
    }
}
