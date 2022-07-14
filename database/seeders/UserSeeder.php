<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
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
        $faker = new Faker;
        for ($i=1; $i < 12; $i++) { 
            $gender = $faker->randomElement(['male', 'female']);
            if ($gender == 'male') {
                $fullname = $faker->name($gender);
            }else{
                $fullname = $faker->name($gender);
            }
            $profile = $faker->randomElement(['ADMIN', 'EMPLOYEE']);
            
            User::create([
                'fullname' => $fullname,
                'phone' => $faker->phoneNumber(),
                'email' => $faker->companyEmail(),
                'username' => $faker->userName(),
                'password' => Hash::make('ingresar'),
                'profile' => $profile,
                'status' => 'ACTIVE',
                'image' => 'https://loremflickr.com/220/220/'  
            ]);
        }
    }
}
