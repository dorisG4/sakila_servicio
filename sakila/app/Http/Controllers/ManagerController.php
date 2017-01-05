<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Manager;
use App\Store;
use App\Staff;
use Session;
use Redirect;

use Illuminate\Support\Collection;


class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $managers= Manager::all(); 
        $managers = Manager::paginate(3);
        
        return view('manager.index', compact('managers'));

      

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        // $staffs = \DB::table('staff')->where('active', '=', 'SI')->get();
        // $staffs = Staff::orderBy('id')->pluck('first_name','id');

         $staffs = Staff::where('active', 'SI')->orderBy('id')->pluck('first_name','id');
         $stores = Store::orderBy('id')->pluck('id','id');

        return view('manager.create')
                ->with('stores', $stores)
                ->with('staffs',$staffs);

        // dd($staffs);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $manager = new Manager($request->all());
         //dd($manager);
         $manager->save();

         Session::flash('message','Gerente creado correctamente');
         return Redirect::to('admin/manager');
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
         $staffs = Staff::where('active', 'SI')->orderBy('id')->pluck('first_name','id');   
         //$staffs = Staff::orderBy('id')->pluck('first_name','id');
         $stores = Store::orderBy('id')->pluck('id','id');

         $manager= Manager::find($id);

         return view('manager.edit')
                ->with('stores', $stores)
                ->with('staffs',$staffs)
                ->with('manager',$manager);
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
         $manager = Manager::find($id);
         $manager ->fill($request->all());
         $manager ->save();

         Session::flash('message','Gerente actualizado correctamente');
         return Redirect::to('admin/manager');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Manager::destroy($id);
         Session::flash('message','Gerente eliminado correctamente');
         return Redirect::to('admin/manager');
    }
}
