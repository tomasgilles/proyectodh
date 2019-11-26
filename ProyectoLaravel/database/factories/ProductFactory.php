<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

  $path = storage_path('app/public/products'); //crear carpeta de destino
  $talles = [38, 39, 40, 41, 42, 43, 44, 45];

    return [
      'name' => $faker->sentence(2),
      'description' => $faker->paragraph(2),
      'size' => $faker->numberBetween(38,45),
      'price' => $faker->randomFloat(2, 2, 8),
      'stock' => $faker->numberBetween(0, 50),
      'user_id' => 1,
      'main_image' => $faker->image($path, 580, 580, 'sports', false),
      'brand' => 'nike',
      'product_type' => 'botines'
        ];
});
