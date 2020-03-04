<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\camp;
use Faker\Generator as Faker;

$factory->define(camp::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,

        'address'=> $faker->address,
        'dob'=> $faker->date,
    ];
});
