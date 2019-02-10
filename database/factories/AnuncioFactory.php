<?php

use Faker\Generator as Faker;

$factory->define(App\Anuncio::class, function (Faker $faker) {
    return [
        'co_usuario' => rand(2,100),
        'idade' => rand(18,50),
        'peso' => $faker->randomFloat(2, 45,100),
        'altura' => $faker->randomFloat(2, 1,2),
        'horario' => rand(1,4),
        'atende' => rand(1,3),
        'anal' => $faker->boolean(90),
        'oralsem' => $faker->boolean(90),
        'beijo' => $faker->boolean(90),
        'acessorios' => $faker->boolean(90),
        'descricao' => $faker->sentence(),
        'co_etinia' => rand(1,5),
    ];
});