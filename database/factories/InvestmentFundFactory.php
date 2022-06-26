<?php

namespace Database\Factories;

use App\Models\FundManager;
use App\Models\InvestmentFund;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvestmentFundFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'code' => $this->faker->regexify('[A-Za-z0-9]{4}') . $this->faker->randomNumber(2, true),
            'cnpj' => (string) $this->faker->randomNumber(9, true),
            'type' => $this->faker->randomElement(InvestmentFund::TYPES),
            'segment' => $this->faker->randomElement(InvestmentFund::SEGMENTS),
            'fund_manager_id' => fn () => FundManager::factory()->create(),
        ];
    }
}
