<?php

use Illuminate\Database\Seeder;

use App\City;
use App\Address;
use App\Store;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

                  //insercion de sucursal 1    
                   $city = new City;
                   $city->city = 'x';
                   $city->country_id = 1;
                   $city->save();

                   $address = new Address;
                   $address->address='x';
                   $address->address2= 'x';
                   $address->district= 'x';
                   $address->city()->associate($city);
                   $address->postal_code= '0000';
                   $address->phone = '0000000';
                   $address->save();

                   $store = new Store;
                   $store->address()->associate($address);       
                   $store->save();  


    }
}
