<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VendorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'address' => $this->faker->streetAddress(),
            'bank_id' => $this->faker->unique()->numberBetween(1, 50),
            'account_number' => $this->faker->unique()->numerify('################')
        ];
    }
}
