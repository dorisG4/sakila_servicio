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
       

		       for($i = 0; $i < 17; $i++)
		       {
		      
		       \DB::table('categories')->insert(array(
		       	    'name'=>$faker->unique()->randomElement(['Comedia', 'Musical', 'Terror', 'Ciencia ficción', 'Melodrama', 'Histórica', 'Aventura', 'Documental', 'Acción', 'Guerra', 'Misterio', 'Infantil', 'Fantasia', 'Musical', 'Suspenso','Drama','Basada en hechos reales', 'Artes marciales']),	
		       	    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')	       	
		       	    ));
		       }



    }
}
