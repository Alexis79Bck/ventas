<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Generator as Faker;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Faker;

        Category::create([
           'name' => $faker->words(3, true),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ]);
        Category::create([
           'name' => $faker->words(3, true),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ]);
        Category::create([
           'name' => $faker->words(3, true),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ]);
        Category::create([
           'name' => $faker->words(3, true),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ]);
        Category::create([
           'name' => $faker->words(3, true),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ]);
        Category::create([
           'name' => $faker->words(3, true),
           'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
        ]);
    }
}
