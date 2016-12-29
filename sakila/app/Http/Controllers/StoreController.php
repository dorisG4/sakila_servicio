<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;

use App\Country;
use App\City;
use App\Store;
use App\Address;


class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $stores=Address::search($request->address)->orderBy('id','DESC')->paginate(3);
        // $films=Film::orderBy('id','DES')->paginate(5);
        // return view('film.index', compact('films')); 
            $stores=Store::orderBy('id','ASC')->paginate(10);
         
            //dd($films);
            return view('stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::orderBy('country','ASC')->pluck('country','id');
        return view('stores.create')
                ->with('countries', $countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
       $city = new City($request->all());
       $city->save();

       $address = new Address($request->all());
       $address->city()->associate($city);       
       //dd($address);
       $address->save();

       $store = new Store($request->all());
       $store->address()->associate($address);       
       $store->save();


       Session::flash('message','Sucursal creada correctamente');
       return Redirect::to('/stores');

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
        $store = Store::find($id);
        $address = Address::find($id);
        $city = City::find($id);
        //$filmText->title;
        //dd( $filmText->description);
         
        $countries = Country::orderBy('country','ASC')->pluck('country','id');
        //$city = City::orderBy('city','ASC')->pluck('city','id');
        //$my_city = $city->city->pluck('city','id')->ToArray();

         return view('stores.edit',['store'=>$store])  
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
    public function update(StoreRequest $request, $id)
    {

        $store= Store::find($id);
        $address_id=$store->address_id;
           
        $address = Address::find($address_id);
        $city_id=$address->city_id;

        $city = City::find($city_id);
        $city->fill($request->all());   
        $city->save();

        $address->fill($request->all());
        $address->city()->associate($city); 
        $address->save();

        $store->fill($request->all());
        $store->address()->associate($address); 
        $store->save();
            
            
        Session::flash('message','Sucursal actualizada correctamente');   
        return Redirect::to('/stores');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Store::destroy($id);
        // $store = Store::find($id);
        // $store->delete();
        
        $store= Store::find($id);
        $address_id=$store->address_id;
           
        $address = Address::find($address_id);
        $city_id=$address->city_id;

        $city = City::find($city_id);  
        $city->delete();

         Session::flash('message','Sucursal eliminada correctamente');
         return Redirect::to('/stores');
    }
}
