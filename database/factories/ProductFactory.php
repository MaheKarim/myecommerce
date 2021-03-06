<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Product::class, function (Faker $faker) {

    $name =  substr($faker->text, 0, 50);

    return [

        'category_id' => rand(1, 10),
        'name'        => $name,
        'slug'        => str_slug($name),
        'description' => $faker->text,
        'quantity'    => rand(1, 5),
        'price'       => rand(1, 5000),
        'created_at'  => Carbon::now(),
        'updated_at'  => Carbon::now(),
    ];
});

$factory->afterCreating(Product::class, function ($product, Faker $faker){

   $product->images()->create([
    'image' => $faker->imageUrl()
   ]);

});
