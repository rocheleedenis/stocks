<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeerder extends Seeder
{
    public function run()
    {
        $entities = [
            [
                'name' => 'Sanepar',
                'cnpj' => '76.484.013/0001-45',
                'full_name' => 'Companhia de Saneamento Paraná',
                'segment_id' => 1,
            ],
            [
                'name' => 'Itausa',
                'cnpj' => '61.532.644/0001-15',
                'full_name' => 'Itaúsa S.A.',
                'segment_id' => 2,
            ],
            [
                'name' => 'Banco do Brasil',
                'cnpj' => '00.000.000/0001-91',
                'full_name' => 'Itaúsa S.A.',
                'segment_id' => 2,
            ],
            [
                'name' => 'Santander',
                'cnpj' => '90.400.888/0001-42',
                'full_name' => 'Banco Santander (Brasil) SA',
                'segment_id' => 2,
            ],
            [
                'name' => 'Bradesco',
                'full_name' => 'BANCO BRADESCO S.A.',
                'cnpj' => '60.746.948/0001-12',
                'segment_id' => 2,
            ],
            [
                'name' => 'Wiz',
                'full_name' => 'WIZ S.A.',
                'cnpj' => '42.278.473/0001-03',
                'segment_id' => 3,
            ],
            [
                'name' => 'BB Seguridade',
                'full_name' => 'BB SEGURIDADE PARTICIPAÇÕES S.A.',
                'cnpj' => '17.344.597/0001-94',
                'segment_id' => 3,
            ],
            [
                'name' => 'Caixa Seguridade',
                'full_name' => 'CAIXA SEGURIDADE PARTICIPAÇÕES S.A.',
                'cnpj' => '22.543.331/0001-00',
                'segment_id' => 4,
            ],
            [
                'name' => 'Porto Seguro',
                'full_name' => 'PORTO SEGURO SA',
                'cnpj' => '02.149.205/0001-69',
                'segment_id' => 4,
            ],
            [
                'name' => 'Magazine Luiza',
                'full_name' => 'MAGAZINE LUIZA S.A',
                'cnpj' => '47.960.950/0001-21',
                'segment_id' => 5,
            ],
            [
                'name' => 'Lojas Renner',
                'full_name' => 'LOJAS RENNER S.A.',
                'cnpj' => '92.754.738/0001-62',
                'segment_id' => 6,
            ],
            [
                'name' => 'JHSF',
                'full_name' => 'JHSF PARTICIPACOES S.A.',
                'cnpj' => '08.294.224/0001-65',
                'segment_id' => 7,
            ],
            [
                'name' => 'Alupar',
                'full_name' => 'Alupar Investimento S.A.',
                'cnpj' => '08.364.948/0001-38',
                'segment_id' => 8,
            ],
            [
                'name' => 'Copel',
                'full_name' => 'COMPANHIA PARANAENSE DE ENERGIA',
                'cnpj' => '76.483.817/0001-20',
                'segment_id' => 8,
            ],
            [
                'name' => 'Taesa',
                'full_name' => 'TRANSMISSORA ALIANÇA DE ENERGIA ELÉTRICA S.A.',
                'cnpj' => '07.859.971/0001-30',
                'segment_id' => 8,
            ],
            [
                'name' => 'Trans Paulista',
                'full_name' => 'CTEEP - Companhia de Transmissão de Energia Elétrica Paulista',
                'cnpj' => '02.998.611/0001-04',
                'segment_id' => 8,
            ],
            [
                'name' => 'Randon',
                'full_name' => 'RANDON S.A. IMPLEMENTOS E PARTICIPAÇÕES',
                'cnpj' => '89.086.144/0001-16',
                'segment_id' => 9,
            ],
            [
                'name' => 'Tupy',
                'full_name' => 'TUPY S/A',
                'cnpj' => '84.683.374/0001-49',
                'segment_id' => 9,
            ],
            [
                'name' => 'Weg',
                'full_name' => 'INDÚSTRIAS ROMI S.A.',
                'cnpj' => '56.720.428/0001-63',
                'segment_id' => 10,
            ],
        ];

        foreach ($entities as $entity) {
            Company::firstOrcreate($entity);
        }
    }
}
