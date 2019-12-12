<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EmpleadoProyecto;
use Faker\Generator as Faker;

$factory->define(EmpleadoProyecto::class, function (Faker $faker) {
    return [
        'fechainicio' => $faker->dateTime($min='now',$timezone='UTC'),
		'fechafin'  => $faker->dateTime($min='now',$timezone='UTC'),
		'empleado_id' => $faker->numberBetween(1,10),
		'proyecto_id' => $faker->numberBetween(1,5)
    ];
});
