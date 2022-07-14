<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $cost = $this->faker->randomFloat(2, 50, 99999);
        $price = $cost * 1.30;
        $categoryId = $this->faker->numberBetween(1, 7);
      
        $data = [
            'name' => $this->faker->words(3, true),
            'cost' => $cost,
            'price' => $price,
            'barcode' => $this->faker->randomNumber(9, true),
            'stock' => 500,
            'alert' => 25,
            'category_id' => $categoryId
        ];

      
        return $data;
    }
}
