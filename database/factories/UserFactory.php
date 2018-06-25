<?php

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
  return [
      'nombre' => 'Alvaro',
      'email' => 'alvaro.ajv@hotmail.com',
      'password' =>bcrypt('123456'),
      'remember_token' => str_random(10),
      'tipo_usuario_id'=>1,
      'direccion'=>'Alajuela',
      'telefono'=>'12345678',
      'apellidos'=>'Vargas Vargas',
  ];
});
