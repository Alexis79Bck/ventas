<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; 


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Category::factory()->count(7)->create();
      //   Category::create([
      //      'name' => $faker->words(3, true),
      //      'image' => 'https://dummyimage.com/220/f7ffd6/ffffff.png'
      //   ]);
        
    }
}
