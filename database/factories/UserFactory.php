<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

//$factory->define(User::class, function (Faker $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'email_verified_at' => now(),
//        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//        'remember_token' => Str::random(10),
//    ];
//});

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $name = $faker->word(3),
        'subtitle' => $faker->word(5),
        'slug' => str_slug($name),
        'body' =>$faker->realText(500),
        'image' => $faker->image('public/images',600,450, null, false),
        'status' => $faker->numberBetween(0,1),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->word(1),
        'slug' => str_slug($name),
    ];
});

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->word(1),
        'slug' => str_slug($name),
    ];
});

$factory->define(App\post_tag::class, function (Faker $faker) {
    //$tag = App\post_tag::pluck('tag_id')->toArray();
    $posts = App\Post::pluck('id')->toArray();
    return [
        'post_id' => $faker->randomElement($posts),
        'tag_id' => $faker->randomElement($posts),
        //'tag_id' => $faker->randomElement($post),
    ];
});

$factory->define(App\category_post::class, function (Faker $faker) {
    //$tag = App\post_tag::pluck('tag_id')->toArray();
    $posts = App\Category::pluck('id')->toArray();
    return [
        'post_id' => $faker->randomElement($posts),
        'category_id' => $faker->randomElement($posts),
        //'tag_id' => $faker->randomElement($post),
    ];
});
