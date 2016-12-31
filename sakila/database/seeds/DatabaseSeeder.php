<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        $this->call('CategoryTableSeeder');
        $this->call('ActorTableSeeder');
        $this->call('LanguageTableSeeder');
        $this->call('CountryTableSeeder');
        $this->call('StoreTableSeeder');
        $this->call('StaffTableSeeder');
    }
}
