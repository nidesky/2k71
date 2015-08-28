<?php


$factory->define(Ik47\Models\User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->name,
        'email' => $faker->freeEmail,
        'password' => bcrypt('123456'),
    ];
});


$factory->define(Ik47\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(6),
        'body'  => $faker->text(300),
        'author'=> $faker->name
    ];
});


$factory->define(Ik47\Models\Gist::class, function (Faker\Generator $faker) {
    return [
        'title'     => $faker->sentence(6),
        'filename'  => $faker->firstName,
        'code'      => $faker->text(150),
    ];
});
