<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AnnualLeaveDate;
use Faker\Generator as Faker;

$factory->define(AnnualLeaveDate::class, function (Faker $faker) {
    return [
        'annual_leave_id' => function () {
            return factory('App\Models\AnnualLeave')->create()->id;
        },
        'date' => $faker->date
    ];
});
