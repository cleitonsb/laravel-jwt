<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_estado')->insert([
            'co_estado' => 1,
            'nome' => 'Distrito Federal',
        ]);
    }
}
