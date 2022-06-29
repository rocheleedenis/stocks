<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Stock;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class StockControllerTest extends TestCase
{
    public function test_get_stocks()
    {
        Stock::factory(3)->create();

        $this->json('GET', url('stocks'))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->has(3)
            );
    }

    public function test_get_an_specific_stock()
    {
        Stock::factory(2)->create();

        $stockbroker = Stock::first();

        $this->json('GET', url('stocks/' . $stockbroker->id))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('id', $stockbroker->id)
                    ->where('code', $stockbroker->code)
                    ->where('company_id', $stockbroker->company_id)
                    ->etc()
        );
    }

    public function test_store_a_new_stock()
    {
        $data = Stock::factory()->make()->toArray();

        $this->json('POST', url('stocks'), $data)
            ->assertStatus(201)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('code', $data['code'])
                    ->where('company_id', $data['company_id'])
                    ->etc()
            );
    }
}