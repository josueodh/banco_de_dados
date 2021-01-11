<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PublishingCompany;
use Faker\Generator as Faker;

$factory->define(PublishingCompany::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
