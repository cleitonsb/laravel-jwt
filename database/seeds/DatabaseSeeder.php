<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstadosTableSeeder::class);
        $this->call(CidadesTableSeeder::class);
        $this->call(BairrosTableSeeder::class);
        $this->call(EtiniasTableSeeder::class);
        $this->call(IdiomasTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(UsuariosIdiomasTableSeeder::class);
    }
}
