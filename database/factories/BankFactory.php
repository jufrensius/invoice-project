<?php

namespace Database\Factories;

use App\Models\Bank;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BankFactory extends Factory
{
    protected $model = Bank::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numerify('###'),
            'name' => Str::random(3),
        ];
    }
}
