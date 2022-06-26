<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FundManagerFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'cnpj' => (string) $this->faker->randomNumber(9, true),
            'site' => $this->faker->url,
        ];
    }
}
