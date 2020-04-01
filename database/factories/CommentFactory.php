<?php

use Faker\Generator as Faker;
use App\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name() ,
        'email' => $faker->randomElement($array = [
            'user.431@loops.test',
            'user.211@loops.test',
            'user.321@loops.test',
            'guest.01@loops.test',
            'guest.02@loops.test',
            'guest.03@loops.test',
            'guest.04@loops.test',
        ]),
        'website' => $faker->domainName() ,
        'comment' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
    ];
});
