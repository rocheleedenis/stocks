<?php

namespace Database\Factories;

use App\Models\Stockbroker;
use Illuminate\Database\Eloquent\Factories\Factory;

class TradingNoteFactory extends Factory
{
    public function definition()
    {
        return [
            'date' => now()->format('Y-m-d'),
            'taxes' => $this->faker->randomNumber(),
            'stockbroker_id' => fn () => Stockbroker::factory()->create()->id,
        ];
    }
}
