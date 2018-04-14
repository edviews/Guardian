<?php

use Faker\Generator as Faker;
use Modules\Guardian\Entities\Guardian;

$factory->define(Guardian::class, function (Faker $faker) {
    static $number = 1;

    return [
        'student_id'  => $number++,
        'father_education' => $faker->text,
        'mother_education' => $faker->text,
    ];
});
