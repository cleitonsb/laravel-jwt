<?php

$factory->define(App\UsuarioIdioma::class, function () {
    return [
        'co_usuario' => rand(1,100),
        'co_idioma' => rand(1,3),
    ];
});