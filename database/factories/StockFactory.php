<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    public function definition()
    {
        return [
            'company_id' => fn () => CompanyFactory::new()->create()->id,
            'code' => $this->faker->unique()->word,
        ];
    }
}
