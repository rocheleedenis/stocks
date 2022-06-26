<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\FundManager;
use Illuminate\Testing\Fluent\AssertableJson;

class FundManagerControllerTest extends TestCase
{
    public function test_get_fund_managers()
    {
        FundManager::factory(3)->create();

        $this->json('GET', url('fund-managers'))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->has(3)
            );
    }

    public function test_get_an_specific_fund_manager()
    {
        FundManager::factory(2)->create();

        $fundManager = FundManager::first();

        $this->json('GET', url('fund-managers/' . $fundManager->id))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('id', $fundManager->id)
                    ->where('name', $fundManager->name)
                    ->where('site', $fundManager->site)
                    ->etc()
            );
    }

    public function test_store_a_new_fund_manager()
    {
        $data = FundManager::factory()->make()->toArray();

        $this->json('POST', url('fund-managers'), $data)
            ->assertStatus(201)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('name', $data['name'])
                    ->where('site', $data['site'])
                    ->etc()
            );
    }
}
