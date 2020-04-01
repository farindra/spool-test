<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Post;

$factory->define(Post::class, function ( Faker $faker ) {
    return [
        'title' => $title = $faker->catchPhrase() ,
        'slug' => Str::slug($title),
        'content' => $faker->text($maxNbChars = 500) ,
    ];
});
