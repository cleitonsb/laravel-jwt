<?php

use Illuminate\Database\Seeder;

class SexoAtendeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Homem',
            'Mulher',
            'Ambos',
        ];

        foreach ($data as $row => $value) {
            DB::table('tb_sexo_atende')->insert([
                'nome' => $value,
            ]);
        }
    }
}
