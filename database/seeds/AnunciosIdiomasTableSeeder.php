<?php

use Illuminate\Database\Seeder;

class AnunciosIdiomasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\AnuncioIdioma::class, 100)->create();
    }
}
