<?php

use Illuminate\Database\Seeder;

class UsuariosIdiomasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\UsuarioIdioma::class, 100)->create();
    }
}
