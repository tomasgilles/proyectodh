<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

  $path = storage_path('app/public/products'); //crear carpeta de destino

    return [
      'name' => $faker->sentence(2),
      'description' => $faker->paragraph(2),
      'size' => $faker->numberBetween(38, 45),
      'price' => $faker->randomFloat(2, 2, 8),
      'stock' => $faker->numberBetween(0, 50),
      'user_id' => 1,
      'main_image' => $faker->image($path, 300, 300, 'sports', false)
    ];
});
