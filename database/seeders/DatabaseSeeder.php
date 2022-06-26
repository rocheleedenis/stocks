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
            CompaniesSeerder::class,
            FundManagerSeeder::class,
            InvestmentFundSeeder::class,
        ]);
    }
}
