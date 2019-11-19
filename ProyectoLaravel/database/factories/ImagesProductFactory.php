<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ImagesProduct;
use Faker\Generator as Faker;

$factory->define(ImagesProduct::class, function (Faker $faker) {

  $path = storage_path('app/public/products');

    return [
        'product_id' => 1,
        'image' => $faker->image($path, 580, 580, 'sports', false)
    ];
});
