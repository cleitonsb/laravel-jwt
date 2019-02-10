<?php

use Illuminate\Database\Seeder;

class CidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_cidade')->insert([
            'co_cidade' => 1,
            'nome' => 'Brasília',
            'co_estado' => 1,
        ]);
    }
}
