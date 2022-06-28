<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\StockbrokerSeeder;

class DatabaseSeeder extends Seeder
{
    public function run() : void
    {
        $this->call([
            StockbrokerSeeder::class,
            CompanySectorSeeder::class,
            CompanySubsectorSeeder::class,
            CompanySeerder::class,
            FundManagerSeeder::class,
            InvestmentFundSegmentSeeder::class,
            InvestmentFundSeeder::class,
        ]);
    }
}
