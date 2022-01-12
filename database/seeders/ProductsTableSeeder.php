<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few products in our database:
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->name,
                'description' => $faker->paragraph,
            ]);
        }
    }
}
