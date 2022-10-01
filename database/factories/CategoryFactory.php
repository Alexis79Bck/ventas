<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $data = [
           'name' => $this->faker->words(3, true),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ];
        return $data;
    }
}
