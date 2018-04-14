<?php

use Faker\Generator as Faker;
use Modules\Guardian\Entities\Emergency;

$factory->define(Emergency::class, function (Faker $faker) {
    static $number = 1;

    return [
        'student_id' => $number++,
        'title' => $faker->word,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'relationship' => $faker->word,
    ];
});
