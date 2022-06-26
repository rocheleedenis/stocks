<?php

namespace Database\Seeders;

use App\Models\InvestmentFund;
use Illuminate\Database\Seeder;

class InvestmentFundSeeder extends Seeder
{
    public function run()
    {
        $entities = [
            [
                'code' => 'HGLG11',
                'name' => 'CSHG LOGÍSTICA FDO INV IMOB - FII',
                'cnpj' => '11.728.688/0001-47',
                'type' => 'Tijolo',
                'segment' => 'Logística',
                'fund_manager_id' => 7,
            ],
            [
                'code' => 'ALZR11',
                'name' => 'ALIANZA TRUST RENDA IMOBILIARIA FDO INV IMOB',
                'cnpj' => '28.737.771/0001-85',
                'type' => 'Tijolo',
                'segment' => 'Logística',
                'fund_manager_id' => 5,
            ],
            [
                'code' => 'RECT11',
                'name' => 'FUNDO DE INVESTIMENTO IMOBILIÁRIO - FII REC RENDA IMOBILIÁRIA',
                'cnpj' => '32.274.163/0001-59',
                'type' => 'Tijolo',
                'segment' => 'Híbrido',
                'fund_manager_id' => 3,
            ],
            [
                'code' => 'XPML11',
                'name' => 'XP MALLS FDO INV IMOB FII',
                'cnpj' => '28.757.546/0001-00',
                'type' => 'Tijolo',
                'segment' => 'Shoppings',
                'fund_manager_id' => 9,
            ],
            [
                'code' => 'HSML11',
                'name' => 'HSI MALLS FUNDO DE INVESTIMENTO IMOBILIÁRIO',
                'cnpj' => '32.892.018/0001-31',
                'type' => 'Tijolo',
                'segment' => 'Shoppings',
                'fund_manager_id' => 8,
            ],
            [
                'code' => 'HGRE11',
                'name' => 'CSHG REAL ESTATE FDO INV IMOB - FII',
                'cnpj' => '09.072.017/0001-29',
                'type' => 'Tijolo',
                'segment' => 'Lajes Corporativas',
                'fund_manager_id' => 7,
            ],
            [
                'code' => 'VINO11',
                'name' => 'VINCI OFFICES FUNDO DE INVESTIMENTO IMOBILIÁRIO',
                'cnpj' => '12.516.185/0001-70',
                'type' => 'Tijolo',
                'segment' => 'Lajes Corporativas',
                'fund_manager_id' => 3,
            ],
            [
                'code' => 'HCTR11',
                'name' => 'HECTARE CE - FDO INV IMOB',
                'cnpj' => '30.248.180/0001-96',
                'type' => 'Indefinido',
                'segment' => 'Outros',
                'fund_manager_id' => 6,
            ],
            [
                'code' => 'IRDM11',
                'name' => 'FII IRIDIUM RECEBÍVEIS IMOBILIÁRIOS',
                'cnpj' => '28.830.325/0001-10',
                'type' => 'Papel',
                'segment' => 'Títulos e Val. Mob.',
                'fund_manager_id' => 5,
            ],
            [
                'code' => 'KNSC11',
                'name' => 'KINEA SECURITIES FDO. DE INV. IMOB. - FII',
                'cnpj' => '35.864.448/0001-38',
                'type' => 'Papel',
                'segment' => 'Títulos e Val. Mob.',
                'fund_manager_id' => 2,
            ],
            [
                'code' => 'RECR11',
                'name' => 'FUNDO DE INVESTIMENTO IMOBILIÁRIO - FII REC RECEBÍVEIS IMOBILIÁRIOS',
                'cnpj' => '28.152.272/0001-26',
                'type' => 'Papel',
                'segment' => 'Títulos e Val. Mob.',
                'fund_manager_id' => 3,
            ],
            [
                'code' => 'URPR11',
                'name' => 'URCA PRIME RENDA FUNDO DE INVESTIMENTO IMOBILIÁRIO',
                'cnpj' => '34.508.872/0001-87',
                'type' => 'Papel',
                'segment' => 'Outros',
                'fund_manager_id' => 6,
            ],
            [
                'code' => 'CPTS11',
                'name' => 'CAPITANIA SECURITIES II FDO INV IMOB - FII',
                'cnpj' => '18.979.895/0001-13',
                'type' => 'Papel',
                'segment' => 'Títulos e Val. Mob.',
                'fund_manager_id' => 5,
            ],
            [
                'code' => 'VSLH11',
                'name' => 'VERSALHES RECEBÍVEIS IMOBILIÁRIOS - FDO. INV. IMOB',
                'cnpj' => '36.244.015/0001-42',
                'type' => 'Híbrido',
                'segment' => 'Outros',
                'fund_manager_id' => 6,
            ],
        ];

        foreach ($entities as $entity) {
            InvestmentFund::firstOrcreate($entity);
        }
    }
}
