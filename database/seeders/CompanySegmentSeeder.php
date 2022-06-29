<?php

namespace Database\Seeders;

use App\Models\CompanySegment;
use Illuminate\Database\Seeder;

class CompanySegmentSeeder extends Seeder
{
    public function run()
    {
        $entities = [
            [
                'id' => 1,
                'subsector_id' => 1,
                'name' => 'Água e Saneamento',
            ],
            [
                'id' => 2,
                'subsector_id' => 4,
                'name' => 'Bancos',
            ],
            [
                'id' => 3,
                'subsector_id' => 5,
                'name' => 'Corretoras de Seguros e Resseguros',
            ],
            [
                'id' => 4,
                'subsector_id' => 5,
                'name' => 'Seguradoras',
            ],
            [
                'id' => 5,
                'subsector_id' => 6,
                'name' => 'Eletrodomésticos',
            ],
            [
                'id' => 6,
                'subsector_id' => 6,
                'name' => 'Tecidos. Vestuário e Calçados',
            ],
            [
                'id' => 7,
                'subsector_id' => 7,
                'name' => 'Incorporações',
            ],
            [
                'id' => 8,
                'subsector_id' => 2,
                'name' => 'Energia Elétrica',
            ],
            [
                'id' => 9,
                'subsector_id' => 8,
                'name' => 'Material Rodoviário',
            ],
            [
                'id' => 10,
                'subsector_id' => 9,
                'name' => 'Máq. e Equip. Industriais',
            ],
        ];

        foreach ($entities as $entity) {
            CompanySegment::firstOrcreate($entity);
        }
    }
}
