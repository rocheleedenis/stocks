<?php

namespace Database\Factories;

use App\Models\CompanySubsector;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanySegmentFactory extends Factory
{
    public function definition() : array
    {
        return [
            'name' => $this->faker->sentence(3),
            'subsector_id' => fn () => CompanySubsector::factory()->create()->id,
        ];
    }
}
