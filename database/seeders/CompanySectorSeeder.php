<?php

namespace Database\Seeders;

use App\Models\CompanySector;
use Illuminate\Database\Seeder;

class CompanySectorSeeder extends Seeder
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
                'name' => 'Bens Industriais',
            ],
            [
                'id' => 2,
                'name' => 'Comunicações',
            ],
            [
                'id' => 3,
                'name' => 'Consumo Cíclico',
            ],
            [
                'id' => 4,
                'name' => 'Consumo não Cíclico',
            ],
            [
                'id' => 5,
                'name' => 'Financeiro',
            ],
            [
                'id' => 6,
                'name' => 'Materiais Básicos',
            ],
            [
                'id' => 7,
                'name' => 'Outros',
            ],
            [
                'id' => 8,
                'name' => 'Petróleo, Gás e Biocombustíveis',
            ],
            [
                'id' => 9,
                'name' => 'Saúde',
            ],
            [
                'id' => 10,
                'name' => 'Setor Inicial',
            ],
            [
                'id' => 11,
                'name' => 'Tecnologia da Informação',
            ],
            [
                'id' => 12,
                'name' => 'Utilidade Pública',
            ],
        ];

        foreach ($entities as $entity) {
            CompanySector::firstOrcreate($entity);
        }
    }
}
