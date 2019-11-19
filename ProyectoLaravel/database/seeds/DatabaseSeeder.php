<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 6)->create();
        factory(\App\Product::class, 6)->create();
        factory(\App\ImagesProduct::class, 18)->create();
    }
}
