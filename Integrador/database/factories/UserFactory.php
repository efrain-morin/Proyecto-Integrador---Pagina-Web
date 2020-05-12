<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;
    return [
        'nombre' =>$faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' =>$password ?: $password = bcrypt('getback98'), // password
        'remember_token' => Str::random(10),
        'apellidoPaterno' => 'Martínez',
        'apellidoMaterno'  => 'cadena',
        'fechaNacimiento'  => '03-03-1998',
        'CURP' => 'MACI980303',
        'telefono' => '874521',
        'celular'  => '488875125',
        'idPermiso' => 1,
        'idTipoUsuario' => 1,
    ];
});
