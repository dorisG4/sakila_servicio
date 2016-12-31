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
       

       for($i = 0; $i < 30; $i++)
       {
      
       \DB::table('actors')->insert(array(
       	    'first_name'=>$faker->unique()->firstNameMale,
       	    'last_name'=>$faker->unique()->lastName,
       	    'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')	

       	    ));
       }


    }
}
