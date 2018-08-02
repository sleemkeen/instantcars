<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
              $faker = Faker::create('App/User');
        DB::table('users')->insert([
                'fullname' => $faker->firstNameMale.' '.$faker->lastName,
                'username'=> $faker->username,
                'email'=>$faker->email,
                'password'=>bcrypt("howareyou"),
                'address'=>$faker->address,
                'phone'=> $faker->phoneNumber,
                'avatar'=>'😁',
                'throttle'=>'user',
                'cardnumber'=>str_random(10),
                'cvv'=>$faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),
                'expiringdate'=>$faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),
                'pin'=>$faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),
                'authow'=>'email'
                
        ]);
        }
      
    }
}
