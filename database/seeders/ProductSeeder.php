<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
 
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
        Product::factory()->count(25)->create();
        // Product::create([
        //     'name' => $faker->words(3),
        //     'cost' => $cost,
        //     'prices' => $price,
        //     'barcode' => $faker->randomNumber(9, true),
        //     'stock' => 500,
        //     'alert' => 20,
        //     'category_id' => $categoryId
        // ]);
    
    }
}
