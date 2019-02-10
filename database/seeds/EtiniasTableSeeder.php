<?php

use Illuminate\Database\Seeder;

class EtiniasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Loira',
            'Negra',
            'Morena',
            'Ruiva',
            'Asiática',
        ];

        foreach ($data as $row => $value) {
            DB::table('tb_etinia')->insert([
                'nome' => $value,
            ]);
        }
    }
}
