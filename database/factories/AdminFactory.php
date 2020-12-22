<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name(), //une seule mot
        'password' => $faker->slug(),
        'email' =>$faker->unique()->safeEmail
    ];
});
