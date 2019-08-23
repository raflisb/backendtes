<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 
use Carbon\Carbon;
use Illuminate\Support\Facades\DB; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
  
        for ($i=1; $i<=50; $i++) { 
            DB::table('users')->insert([
                'name'=> $faker->name, 
                'email'=> $faker->userName.'@rafli.com', 
                'password' => bcrypt('secret'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gender' => $faker->randomElement(['male', 'female']), 
                'birth_place' => str_random(10), 
                'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'job' => $faker->jobTitle, 

            ]);
        }
    }
}
