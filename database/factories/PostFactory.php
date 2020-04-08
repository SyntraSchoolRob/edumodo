<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Post;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $users = User::pluck('id')->toArray();
    $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
    $slug = Str::slug($title, '-');
    return [
        //
        'user_id' =>$faker->randomElement($users),
        'category_id'=>$faker->numberBetween($min = 1, $max = 2),
        'photo_id'=>$faker->numberBetween($min = 1, $max = 2),
        'title'=>$title,
        'slug' =>$slug,
        'body'=>$faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
