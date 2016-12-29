<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
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
		      
		       \DB::table('categories')->insert(array(
		       	    'name'=>$faker->randomElement(['Cómicas','Comedias','Western', 'Musical', 'Terror', 'Ciencia ficción', 'Melodrama', 'Históricas', 'Aventuras', 'Documental', 'Acción', 'Guerra', 'Misterio', 'infantiles', 'fatasticas', 'musicales'])		       	 

		       	    ));
		       }



    }
}
