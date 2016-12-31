<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Inventory;

class InvetoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$inventory=Inventory::search($request->title)->orderBy('id','DESC')->paginate(8);
         // $inventories = Inventory::all();
        //$inventories = Inventory::with('filmText')->get();
        //$inventories = Inventory::search($request->id)->with('filmText')->get();

        //$inventories = Inventory::search($request->id)->all('id');
        //$inventories=Inventory::orderBy('id','ASC');
        // return view('inventory.index', compact('inventories')); 

        //$inventories = Inventory::search($request->all('id'))->get();
        $inventories= Inventory::all(); 
        //$inventories = Inventory::with('filmText')->get();
        $inventories=Inventory::search($request->id)->orderBy('title','DESC');
        $inventories = Inventory::paginate(3);
        
        //return $inventories; 
        return view('inventory.index', compact('inventories'));

         //dd($inventories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
