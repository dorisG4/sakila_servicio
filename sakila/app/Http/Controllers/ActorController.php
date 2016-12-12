<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Actor;
use Session;
use Redirect;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $actors=Actor::search($request->name)->orderBy('id','DESC')->paginate(5);
        //$actors=Actor::orderBy('id','DES')->paginate(3);
        return view('actor.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Actor::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            ]);

         Session::flash('message','Actor creado correctamente');
         return Redirect::to('/actor');
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
         $actor= Actor::find($id);
         return view('actor.edit',['actor'=>$actor]);
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
         $actor = Language::find($id);
         $actor ->fill($request->all());
         $actor ->save();

         Session::flash('message','Actor actualizado correctamente');
         return Redirect::to('/actor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Actor::destroy($id);
         Session::flash('message','Actor eliminado correctamente');
         return Redirect::to('/actor');
    }
}
