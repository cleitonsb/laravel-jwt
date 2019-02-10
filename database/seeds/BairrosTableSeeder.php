<?php

use Illuminate\Database\Seeder;

class BairrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bairros = [
            'Águas Claras',
            'Asa Norte',
            'Asa Sul',
            'Brazlândia',
            'Candangolândia',
            'Ceilândia',
            'Cruzeiro',
            'Gama',
            'Guará I',
            'Guará II',
            'Lago Norte',
            'Lago Sul',
            'Núcleo Bandeirante',
            'Octogonal',
            'Sudoeste',
            'Paranoá',
            'Park Way',
            'Planaltina',
            'Recanto das Emas',
            'Riacho Fundo',
            'Samambaia',
            'Santa Maria',
            'São Sebastião',
            'SIA',
            'Sobradinho',
            'Sudoeste',
            'Taguatinga Norte',
            'Taguatinga Sul',
            'Vila Planalto',
            'Vicente Pires',
        ];

        foreach ($bairros as $row => $value) {
            DB::table('tb_bairro')->insert([
                'co_cidade' => 1,
                'nome' => $value,
            ]);
        }
    }
}
