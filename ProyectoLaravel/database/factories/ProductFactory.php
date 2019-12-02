<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

  $path = storage_path('app/public/products'); //crear carpeta de destino

    return [
      'user_id' => 1,
      'name' => $faker->sentence(2),
      'description' => $faker->paragraph(50),
      'size' => $faker->numberBetween(38,45),
      'price' => $faker->randomFloat(2, 2, 8),
      'stock' => $faker->numberBetween(0, 50),
      'brand' => 'nike',
      'product_type' => 'botines',
      'main_image' => $faker->image($path, 580, 580, 'sports', false)
    ];
});
