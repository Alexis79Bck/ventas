<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
           'name' => $this->faker->words(3),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ]);
        Category::create([
           'name' => $this->faker->words(3),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ]);
        Category::create([
           'name' => $this->faker->words(3),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ]);
        Category::create([
           'name' => $this->faker->words(3),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ]);
        Category::create([
           'name' => $this->faker->words(3),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ]);
        Category::create([
           'name' => $this->faker->words(3),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ]);
    }
}
