<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Inventory;
use App\Customer;
use App\Staff;
use App\Rental;
use App\Payment;
use App\FilmText;

use Redirect;
use Session;



class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //$films=Film::search($request->title)->orderBy('id','DESC')->paginate(8);

            $inventories = Inventory::all();
            $title= $inventories->pluck('filmText')->pluck('title','id');
            $rentals=Rental::orderBy('id','DESC')->paginate(4);
   
            return view('rental.index', compact('rentals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $inventories->each(function($inventories){
        //     $inventories->filmText;
        //     //$inventories->categories;
        //     // $films->filmText;
        //     });

        //$my = $inventories->pluck('filmText','id')->ToArray();
        //$categories = Category::orderBy('name','ASC')->pluck('name','id');
        $inventories = Inventory::all();
        $title= $inventories->pluck('filmText')->pluck('title','id');
        //$title = Inventory::orderBy('title','ASC');
        //$a=Inventory::where('filmText', '=', 'title')->toSql();

        $customers = Customer::orderBy('id')->pluck('first_name','id');
        $staffs = Staff::orderBy('id')->pluck('first_name','id');

        return view('rental.create')
                //->with('inventories', $inventories)
                ->with('title',$title)
                ->with('customers', $customers)
                ->with('staffs',$staffs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rental = new Rental($request->all());
        $rental->save();

        $payment = new Payment($request->all());
        $payment->rental()->associate($rental);
        $payment->save();
        //dd($payment);

        Session::flash('message','Renta de pelicula creada correctamente');
        return Redirect::to('admin/rental');
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
         $rental = Rental::find($id);
         $payment = Payment::find($id);


        $inventories = Inventory::all();
        $title= $inventories->pluck('filmText')->pluck('title','id');

        $customers = Customer::orderBy('id')->pluck('first_name','id');
        $staffs = Staff::orderBy('id')->pluck('first_name','id');
        
        return view('rental.edit',['rental'=>$rental])
                ->with('payment',$payment)
                ->with('title',$title)
                ->with('customers', $customers)
                ->with('staffs',$staffs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rental = Rental::find($id);
        $rental->fill($request->all());   
        $rental->save();

        //dd($rental);

        $payment = Payment::find($id);
        $payment->fill($request->all());   
        $payment->save();


        Session::flash('message','Renta de pelicula actualizada correctamente');   
        return Redirect::to('admin/rental');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rental= Rental::find($id);  
        $rental->delete();

        Session::flash('message','Renta eliminada correctamente');
        return Redirect::to('admin/rental');
    }
}
