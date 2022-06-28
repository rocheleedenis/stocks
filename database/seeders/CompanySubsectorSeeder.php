<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanySubsector;

class CompanySubsectorSeeder extends Seeder
{
    public function run()
    {
        $entities = [
            // Utilidade pública
            [
                'id' => 1,
                'sector_id' => 12,
                'name' => 'Água e Saneamento',
            ],
            [
                'id' => 2,
                'sector_id' => 12,
                'name' => 'Energia Elétrica',
            ],
            [
                'id' => 3,
                'sector_id' => 12,
                'name' => 'Gás',
            ],

            // Financeiro
            [
                'id' => 4,
                'sector_id' => 5,
                'name' => 'Intermediários Financeiros',
            ],
            [
                'id' => 5,
                'sector_id' => 5,
                'name' => 'Previdência e Seguros',
            ],

            // Consumo cíclico
            [
                'id' => 6,
                'sector_id' => 3,
                'name' => 'Comércio',
            ],

            // Consumo cíclico
            [
                'id' => 7,
                'sector_id' => 3,
                'name' => 'Construção Civil',
            ],

            // Bens industriais
            [
                'id' => 8,
                'sector_id' => 1,
                'name' => 'Material de Transporte',
            ],
            [
                'id' => 9,
                'sector_id' => 1,
                'name' => 'Máquinas e Equipamentos',
            ],
        ];

        foreach ($entities as $entity) {
            CompanySubsector::firstOrcreate($entity);
        }
    }
}
