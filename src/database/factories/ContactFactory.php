<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->numberBetween(1,9),
            'email' => $this->faker->name,
            'postcode' => $this->faker->name,
            'address' => $this->faker->name,
            'building_name' => $this->faker->name,
            'opinion' => $this->faker->name,
        ];
    }
}
