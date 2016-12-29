<?php

use Illuminate\Database\Seeder;
//use Parsclick\Paintings;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $faker = Faker\Factory::create();
       //Paintings::truncate();

       for($i = 0; $i < 206; $i++)
       {
      
       \DB::table('countries')->insert(array(
       	'country'=>$faker->unique()->country
       	));
       }
     
    }
}
