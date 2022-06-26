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
                'id' => 1,
                'name' => 'WARREN CORRETORA DE VALORES MOBILIARIOS E CAMBIO LTDA',
                'cnpj' => '92.875.780/0001-31',
                'site' => '',
            ],
            [
                'id' => 2,
                'name' => 'INTRAG DIST TIT VALOR MOB LTDA',
                'cnpj' => '62.418.140/0001-31',
                'site' => '',
            ],
            [
                'id' => 3,
                'name' => 'BRL TRUST DISTRIBUIDORA DE TITULOS E VALORES MOBILIARIOS S.A.',
                'cnpj' => '13.486.793/0001-42',
                'site' => 'www.brltrust.com.br',
            ],
            [
                'id' => 4,
                'name' => 'RIO BRAVO INVESTIMENTOS DTVM LTDA',
                'cnpj' => '72.600.026/0001-81',
                'site' => '',
            ],
            [
                'id' => 5,
                'name' => 'BTG PACTUAL SERVICOS FINANCEIROS S/A DTVM',
                'cnpj' => '59.281.253/0001-23',
                'site' => 'www.btgpactual.com',
            ],
            [
                'id' => 6,
                'name' => 'VORTX DISTRIBUIDORA DE TITULOS E VALORES MOBILIARIOS LTDA.',
                'cnpj' => '22.610.500/0001-88',
                'site' => 'www.vortx.com.br',
            ],
            [
                'id' => 7,
                'name' => 'CREDIT SUISSE HEDGING-GRIFFO CORRETORA DE VALORES S.A.',
                'cnpj' => '61.809.182/0001-30',
                'site' => 'imobiliario.cshg.com.br',
            ],
            [
                'id' => 8,
                'name' => 'SANTANDER SECURITIES SERVICES BRASIL DTVM S.A',
                'cnpj' => '62.318.407/0001-19',
                'site' => 'www.s3dtvm.com.br',
            ],
            [
                'id' => 9,
                'name' => 'XP INVESTIMENTOS CCTVM S.A.',
                'cnpj' => '02.332.886/0001-04',
                'site' => 'www.xpi.com.br',
            ],
        ];

        foreach ($entities as $entity) {
            FundManager::firstOrcreate($entity);
        }
    }
}
