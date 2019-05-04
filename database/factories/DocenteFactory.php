<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Docente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'dni' => $faker->numberBetween(20000000,40000000),
        'direccion' => $faker->address ,
        'telefono' => $faker->numberBetween(100000000,999999999),
    ];


});
