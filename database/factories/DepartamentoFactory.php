<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Departamento;

$factory->define(Departamento::class, function (Faker $faker) {
	return [
		'nombre' => $faker->company
	];
});
