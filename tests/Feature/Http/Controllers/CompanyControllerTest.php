<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\Company;
use Illuminate\Testing\Fluent\AssertableJson;

class CompanyControllerTest extends TestCase
{
    public function test_get_companies()
    {
        Company::factory(3)->create();

        $this->json('GET', url('companies'))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->has(3)
            );
    }

    public function test_get_an_specific_company()
    {
        Company::factory(2)->create();

        $company = Company::first();

        $this->json('GET', url('companies/' . $company->id))
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('id', $company->id)
                    ->where('name', $company->name)
                    ->where('full_name', $company->full_name)
                    ->etc()
            );
    }

    public function test_store_a_new_company()
    {
        $data = Company::factory()->make()->toArray();

        $this->json('POST', url('companies'), $data)
            ->assertStatus(201)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('name', $data['name'])
                    ->where('full_name', $data['full_name'])
                    ->etc()
            );
    }
}
