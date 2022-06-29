<?php

namespace Database\Factories;

use App\Models\CompanySegment;
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
            'segment_id' => fn () => CompanySegment::factory()->create()->id,
        ];
    }
}
