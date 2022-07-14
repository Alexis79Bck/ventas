<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                  
        User::factory()->count(10)->create();
        
        
        // User::create([
        //     'fullname' => $fullname,
        //     'phone' => $faker->phoneNumber(),
        //     'email' => $faker->companyEmail(),
        //     'username' => $faker->userName(),
        //     'password' => Hash::make('ingresar'),
        //     'profile' => $profile,
        //     'status' => 'ACTIVE',
        //     'image' => 'https://loremflickr.com/220/220/'  
        // ]);
       
    }
}
