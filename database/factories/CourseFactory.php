<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {

	$name = $faker->sentence;
    return [
        'name' => $name,
        'slug' => $name,
        'free' =>rand(0,1),
        'difficulty' => ['beginner', 'intermediate', 'advanced'][rand(0,2)],
        'type' => ['theory', 'project','snippet'][rand(0,2)]
    ];
});
