<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InvestmentFundSegment;

class InvestmentFundSegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entities = [
            [
                'id' => 1,
                'name' => 'Híbrido',
            ],
            [
                'id' => 2,
                'name' => 'Logística',
            ],
            [
                'id' => 3,
                'name' => 'Shoppings',
            ],
            [
                'id' => 4,
                'name' => 'Lajes Corporativas',
            ],
            [
                'id' => 5,
                'name' => 'Títulos e Val. Mob.',
            ],
            [
                'id' => 6,
                'name' => 'Outros',
            ],
        ];

        foreach ($entities as $entity) {
            InvestmentFundSegment::firstOrcreate($entity);
        }
    }
}
