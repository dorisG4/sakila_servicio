<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

use Session;
use Redirect;

use App\Country;
use App\City;
use App\Store;
use App\Address;
use App\Customer;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=Customer::orderBy('id','ASC')->paginate(10);

         return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Store::orderBy('id')->pluck('id','id');
        $countries = Country::orderBy('country','ASC')->pluck('country','id');

        return view('customers.create')
                ->with('countries', $countries)
                ->with('stores',$stores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $city = new City($request->all());
        $city->save();

        $address = new Address($request->all());
        $address->city()->associate($city);       
        $address->save();

        $customer = new Customer($request->all());
        $customer->address()->associate($address); 
        $customer->save(); 

        //dd($customer); 
           
        Session::flash('message','Cliente creado correctamente');
        return Redirect::to('admin/customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        ///$stores = Store::find($id);
        $address = Address::find($id);
        $city = City::find($id);
         
        $stores = Store::orderBy('id')->pluck('id','id');
        $countries = Country::orderBy('country','ASC')->pluck('country','id');

         return view('customers.edit',['customer'=>$customer])  
               ->with('stores', $stores)
               ->with('address', $address)
               ->with('countries', $countries)
               ->with('city', $city);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, $id)
    {
        $customer= Customer::find($id);
        $address_id=$customer->address_id;
           
        $address = Address::find($address_id);
        $city_id=$address->city_id;

        $city = City::find($city_id);
        $city->fill($request->all());   
        $city->save();

        $address->fill($request->all());
        $address->city()->associate($city); 
        $address->save();

        $customer->fill($request->all());
        $customer->address()->associate($address); 
        $customer->save();
            
            
        Session::flash('message','Cliente actualizado correctamente');   
        return Redirect::to('admin/customers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer= Customer::find($id);
        $address_id=$customer->address_id;
           
        $address = Address::find($address_id);
        $city_id=$address->city_id;

        $city = City::find($city_id);  
        $city->delete();

         Session::flash('message','Cliente eliminado correctamente');
         return Redirect::to('admin/customers');
    }
}
