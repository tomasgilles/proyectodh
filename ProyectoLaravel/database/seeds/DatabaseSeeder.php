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
        factory(\App\User::class, 1)->create();
        factory(\App\Product::class, 8)->create();
        factory(\App\ImagesProduct::class, 24)->create();

        DB:: table('users')->insert(
        [
        'name' => 'administrador',
        'surname' => 'adm',
        'email' => 'admin@admin.com',
        'password' => bcrypt('admin1234'),
        'rol' => 100,
          ]
        );
    }
}
