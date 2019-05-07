<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Category;
use App\Product;

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
$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

// $factory->define(Category::class, function (Faker $faker) {
//     return [

//         'name' => $faker->name,
//         'slug' => str_random(5),
//         'active' => 1,
//     ];
// });
// $factory->define(Product::class, function (Faker $faker) {
//     return [

//         'name' => $faker->name,
//         'category_id' => rand(1,5),
//         'slug' => str_slug(15),
//         'quantity' => rand(1,10),
//         'description' => str_random(120),
//         'price' => rand(100,5000),
//     ];
// });
