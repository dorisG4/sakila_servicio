<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create();
       

		       for($i = 0; $i < 5; $i++)
		       {
		      
		       \DB::table('languages')->insert(array(
		       	    'name'=>$faker->unique()->randomElement(['Español', 'Ingles', 'Frances', 'Aleman', 'Japones']),	
		       	    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')	       	
		       	    ));
		       }

    }
}
