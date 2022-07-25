<?php

namespace Database\Factories;

use App\Models\Stock;
use App\Models\TradingNote;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperationFactory extends Factory
{
    public function definition()
    {
        return [
            'stock_id' => fn () => Stock::factory()->create()->id,
            'trading_note_id' => fn () => TradingNote::factory()->create()->id,
            'unit_price' => $this->faker->randomNumber(),
            'quantity' => $this->faker->randomNumber(),
            'type' => '???',
        ];
    }
}
