<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockbrokerFactory extends Factory
{
    public function definition() : array
    {
        $fullName = $this->faker->company;

        return [
            'name' => first_word($fullName),
            'full_name' => $fullName,
            'cnpj' => $this->faker->randomNumber(9, true),
        ];
    }
}
