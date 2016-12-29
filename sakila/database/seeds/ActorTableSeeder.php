<?php

use Illuminate\Database\Seeder;

class ActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
       

       for($i = 0; $i < 20; $i++)
       {
      
       \DB::table('actors')->insert(array(
       	    'first_name'=>$faker->unique()->firstNameFemale,
       	    'last_name'=>$faker->unique()->lastName

       	    ));
       }


    }
}
