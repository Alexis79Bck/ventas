<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Faker;
        for ($i=1; $i < 20; $i++) {        
            $cost = $faker->randomNumber($faker->numberBetween(3, 7), true);
            $price = $cost * 1.30;
            $categoryId = $faker->numberBetween(1, 6);
            Product::create([
                'name' => $faker->words(3),
                'cost' => $cost,
                'prices' => $price,
                'barcode' => $faker->randomNumber(9, true),
                'stock' => 500,
                'alert' => 20,
                'category_id' => $categoryId
            ]);
        }
    }
}
