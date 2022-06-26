<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\Stockbroker;
use Illuminate\Testing\Fluent\AssertableJson;

class StockebrokerControllerTest extends TestCase
{
    public function test_get_stockebrokers()
    {
        Stockbroker::factory(3)->create();

        $this->json('GET', url('stockbrokers'))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->has(3)
            );
    }

    public function test_get_an_specific_stockebroker()
    {
        Stockbroker::factory(2)->create();

        $stockbroker = Stockbroker::first();

        $this->json('GET', url('stockbrokers/' . $stockbroker->id))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('id', $stockbroker->id)
                    ->where('name', $stockbroker->name)
                    ->where('full_name', $stockbroker->full_name)
                    ->etc()
            );
    }
}
