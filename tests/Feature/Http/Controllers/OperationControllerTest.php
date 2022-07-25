<?php

namespace Tests\Feature;

use App\Models\Operation;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class OperationControllerTest extends TestCase
{
    public function test_get_trading_notes()
    {
        Operation::factory(3)->create();

        $this->json('GET', url('operations'))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->has(3)
            );
    }

    public function test_get_an_specific_trading_note()
    {
        Operation::factory(2)->create();

        $operation = Operation::first();

        $this->json('GET', url('operations/' . $operation->id))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('id', $operation->id)
                    ->where('quantity', $operation->quantity)
                    ->where('unit_price', $operation->unit_price)
                    ->where('type', $operation->type)
                    ->where('trading_note_id', $operation->trading_note_id)
                    ->where('stock_id', $operation->stock_id)
                    ->etc()
            );
    }

    public function test_store_a_new_trading_note()
    {
        $data = Operation::factory()->make()->toArray();

        $this->json('POST', url('operations'), $data)
            ->assertStatus(201)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('quantity', $data['quantity'])
                    ->where('unit_price', $data['unit_price'])
                    ->where('type', $data['type'])
                    ->where('trading_note_id', $data['trading_note_id'])
                    ->where('stock_id', $data['stock_id'])
                    ->etc()
            );
    }
}
