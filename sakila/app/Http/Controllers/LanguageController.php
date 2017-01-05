<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Language;
use Session;
use Redirect;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $languages=Language::search($request->name)->orderBy('id','DESC')->paginate(5);
        return view('language.index', compact('languages')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('language.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Language::create([
            'name' => $request['name'],
            ]);

         Session::flash('message','Idioma creado correctamente');
         return Redirect::to('admin/language');
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
         $language= Language::find($id);
         return view('language.edit',['language'=>$language]);
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
         $language = Language::find($id);
         $language->fill($request->all());
         $language->save();

         Session::flash('message','Idioma actualizado correctamente');
         return Redirect::to('admin/language');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Language::destroy($id);
         Session::flash('message','Idioma eliminado correctamente');
         return Redirect::to('admin/language');
    }
}
