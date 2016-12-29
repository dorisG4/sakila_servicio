<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\City;
use App\Address;
use App\Staff;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
                   $city = new City;
                   $city->city = 'aaa';
                   $city->country_id = 2;
                   $city->save();

                   $address = new Address;
                   $address->address='aaa';
                   $address->address2= 'aaa';
                   $address->district= 'aaa';
                   $address->city()->associate($city);
                   $address->postal_code= '0000';
                   $address->phone = '0000000';
                   $address->save();

                   $staff = new Staff;
                   $staff->first_name ='Administrador';
                   $staff->first_name ='Administrador';
                   $staff->last_name  = 'x';
                   $staff->address()->associate($address); 
                   $staff->picture  = 'x';  
                   $staff->email    ='admin@gmail.com';
                   $staff->store_id = 1;
                   $staff->active   ='SI';
                   $staff->username = 'administrador';
                   $staff->password =  bcrypt('admin');                     
                   $staff->save();

    }
}
