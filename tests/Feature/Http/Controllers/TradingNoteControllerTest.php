<?php

namespace Tests\Feature;

use App\Models\TradingNote;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class TradingNoteControllerTest extends TestCase
{
    public function test_get_trading_notes()
    {
        TradingNote::factory(3)->create();

        $this->json('GET', url('trading-notes'))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->has(3)
            );
    }

    public function test_get_an_specific_trading_note()
    {
        TradingNote::factory(2)->create();

        $tradingNote = TradingNote::first();

        $this->json('GET', url('trading-notes/' . $tradingNote->id))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('id', $tradingNote->id)
                    ->where('date', $tradingNote->date)
                    ->where('taxes', $tradingNote->taxes)
                    ->where('stockbroker_id', $tradingNote->stockbroker_id)
                    ->etc()
            );
    }

    public function test_store_a_new_trading_note()
    {
        $data = TradingNote::factory()->make()->toArray();

        $this->json('POST', url('trading-notes'), $data)
            ->assertStatus(201)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('date', $data['date'])
                    ->where('taxes', $data['taxes'])
                    ->where('stockbroker_id', $data['stockbroker_id'])
                    ->etc()
            );
    }
}
