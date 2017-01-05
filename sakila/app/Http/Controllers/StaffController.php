<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;

use Session;
use Redirect;

use App\Staff;
use App\Country;
use App\Store;
use App\City;
use App\Address;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $staffs=Staff::orderBy('id','ASC')->paginate(6);        

         return view('staff.index', compact('staffs'));
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

        return view('staff.create')
                ->with('countries', $countries)
                ->with('stores',$stores);


       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffRequest $request)
    {
      
        //manipulacion de imagenes
        if($request->file('picture'))
        {
        $file = $request->file('picture');
        $picture = 'staff_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/staffImages';
        $file->move($path, $picture);
        }
        //
        $city = new City($request->all());
        $city->save();

        $address = new Address($request->all());
        $address->city()->associate($city);       
        $address->save();

        $staff = new Staff($request->all());
        $staff->address()->associate($address); 
        $staff->picture = $picture;
        $staff->password=bcrypt($request['password']);  
       // $staff->password=$request['password'];     
        $staff->save();  
        //dd($picture);      
        Session::flash('message','Empleado creado correctamente');
        return Redirect::to('admin/staff');



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
    public function edit( $id)
    {
       
        $staff = Staff::find($id);
        //$password=$staff->password;
        //$password = Hash::make(Input::get('password'));

        //$picture = $staff->picture; 
        //$file = $request->file($picture);        
        //$name = file($picture)->getClientOriginalName();
        //$store = Store::find($id);
        $address = Address::find($id);
        $city = City::find($id);
       
        $stores = Store::orderBy('id')->pluck('id','id');
        $countries = Country::orderBy('country','ASC')->pluck('country','id');
     

         return view('staff.edit',['staff'=>$staff])  
               ->with('address', $address)
               ->with('countries', $countries)
               ->with('city', $city)
               ->with('stores',$stores);

        //dd($password);
        //dd($staff->password);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffRequest $request, $id)
    {
        
        // if($request->file('picture'))
        // {
       
        // $file = $request->file('picture');
        // $picture = 'staff_' . time() . '.' . $file->getClientOriginalExtension();
        // $path = public_path() . '/staffImages';
        // $file->move($path, $picture);

        //  dd($picture);
        //}
       
        $staff = Staff::find($id);
        $address_id=$staff->address_id; 
        
        //$picture=$staff->picture;
                
        $address = Address::find($address_id);
        $city_id=$address->city_id;

        $city = City::find($city_id);
        $city->fill($request->all());   
        $city->save();

        $address->fill($request->all());
        $address->city()->associate($city); 
        $address->save();

        $a=Input::get('password');

            if ($a=="") {
                
                $password=$staff->password; 

                $staff->fill($request->all());
                $staff->address()->associate($address);
                $staff->password=$password;  
                $staff->save();        
                      }

       else{

            $staff->fill($request->all());
            $staff->address()->associate($address); 
            //$staff->password=bcrypt($request['password']); 
            $staff->password=bcrypt($request['password']); 
            //$staff->picture=$picture;
            $staff->save();
            //dd($staff);
           }         

            Session::flash('message','Empleado actualizado correctamente');   
            return Redirect::to('admin/staff');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff= Staff::find($id);
        $address_id=$staff->address_id;
           
        $address = Address::find($address_id);
        $city_id=$address->city_id;

        $city = City::find($city_id);  
        $city->delete();

        Session::flash('message','Empleado eliminado correctamente');
        return Redirect::to('admin/staff');
    }
}
