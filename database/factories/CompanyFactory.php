<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    public function definition() : array
    {
        $fullName = $this->faker->company;

        return [
            'name' => first_word($fullName),
            'full_name' => $fullName,
            'cnpj' => (string) $this->faker->randomNumber(9, true),
            'sector' => $this->faker->sentence(3),
            'subsector' => $this->faker->sentence(6),
        ];
    }
}
