<?php

namespace Database\Seeders;

use App\Models\FundManager;
use Illuminate\Database\Seeder;

class FundManagerSeeder extends Seeder
{
    public function run()
    {
        $entities = [
            [
                'name' => 'WARREN CORRETORA DE VALORES MOBILIARIOS E CAMBIO LTDA',
                'cnpj' => '92.875.780/0001-31',
                'site' => '',
            ],
            [
                'name' => 'INTRAG DIST TIT VALOR MOB LTDA',
                'cnpj' => '624.181.400/001-31',
                'site' => '',
            ],
            [
                'name' => 'BRL TRUST DISTRIBUIDORA DE TITULOS E VALORES MOBILIARIOS S.A.',
                'cnpj' => '13.486.793/0001-42',
                'site' => '',
            ],
            [
                'name' => 'RIO BRAVO INVESTIMENTOS DTVM LTDA',
                'cnpj' => '72.600.026/0001-81',
                'site' => '',
            ],
            [
                'name' => 'BTG PACTUAL SERVICOS FINANCEIROS S/A DTVM',
                'cnpj' => '59.281.253/0001-23',
                'site' => '',
            ],
        ];

        foreach ($entities as $entity) {
            FundManager::firstOrcreate($entity);
        }
    }
}
