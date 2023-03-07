<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AnnualLeave;
use Faker\Generator as Faker;

$factory->define(AnnualLeave::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory('App\Models\User')->create()->id;
        },
        'reason' => $faker->paragraph,
        'status' => $faker->randomElement(['approved', 'processed', 'rejected'])
    ];
});
