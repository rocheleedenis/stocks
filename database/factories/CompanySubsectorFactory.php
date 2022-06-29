<?php

namespace Database\Factories;

use App\Models\CompanySector;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanySubsectorFactory extends Factory
{
    public function definition() : array
    {
        return [
            'name' => $this->faker->sentence(3),
            'sector_id' => fn () => CompanySector::factory()->create()->id,
        ];
    }
}
