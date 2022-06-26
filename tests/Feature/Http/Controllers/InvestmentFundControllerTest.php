<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\FundManager;
use Tests\TestCase;
use App\Models\InvestmentFund;
use Illuminate\Testing\Fluent\AssertableJson;

class InvestmentFundControllerTest extends TestCase
{
    public function test_get_fund_investment_funds()
    {
        InvestmentFund::factory(3)->create();

        $this->json('GET', url('investment-funds'))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->has(3)
            );
    }

    public function test_get_an_specific_investment_fund()
    {
        InvestmentFund::factory(2)->create();

        $investmentFund = InvestmentFund::first();

        $this->json('GET', url('investment-funds/' . $investmentFund->id))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('id', $investmentFund->id)
                    ->where('name', $investmentFund->name)
                    ->where('type', $investmentFund->type)
                    ->where('segment', $investmentFund->segment)
                    ->etc()
            );
    }

    public function test_store_a_new_investment_fund()
    {
        $data = InvestmentFund::factory()->make()->toArray();

        $this->json('POST', url('investment-funds'), $data)
            ->assertStatus(201)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('name', $data['name'])
                    ->where('type', $data['type'])
                    ->where('segment', $data['segment'])
                    ->etc()
            );
    }
}
