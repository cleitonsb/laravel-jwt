<?php

use Faker\Generator as Faker;

$factory->define(App\AnuncioIdioma::class, function (Faker $faker) {
    return [
        'co_anuncio' => rand(1,100),
        'co_idioma' => rand(1,3),
    ];
});