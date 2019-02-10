<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Usuario::class,1)->create([
            'email' => 'admin@user.com',
            'co_perfil' => 1,
        ]);

        factory(\App\Usuario::class,100)->create();
    }
}
