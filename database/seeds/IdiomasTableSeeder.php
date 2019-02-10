<?php

use Illuminate\Database\Seeder;

class IdiomasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Português',
            'Inglês',
            'Espanhol',
        ];

        foreach ($data as $row => $value) {
            DB::table('tb_idioma')->insert([
                'nome' => $value,
            ]);
        }
    }
}
