<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Language;
use App\Category;
use App\Actor;
use App\Film;
use App\FilmText;
use App\Store;

use Illuminate\Support\Facades\Input;
use Session;
use Redirect;

use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $films=Film::search($request->title)->orderBy('id','DESC')->paginate(3);
        // $films=Film::orderBy('id','DES')->paginate(5);
        // return view('film.index', compact('films')); 
   
            $films->each(function($films){
            $films->language;
            $films->categories;
            });
            //dd($films);
            return view('film.index')->with('films',$films);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $actors = Actor::orderBy('first_name','ASC')->pluck('first_name','id');
        $languages = Language::orderBy('name','ASC')->pluck('name','id');
        $stores = Store::orderBy('id')->pluck('id','id');
        // $categories = Category::orderBy('name', 'ASC')->lists('name','id');
        //dd($categories);
        return view('film.create')
               ->with('categories', $categories)
               ->with('actors', $actors)
               ->with('stores', $stores)
               ->with('languages', $languages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFilmRequest $request)
    {

       $film = new Film($request->all());
       $film->save();

       $film->actors()->sync($request->actor_id);
       $film->categories()->sync($request->category_id);

       $title= Input::get('title2');
       $description=Input::get('description2');

       $film_text = new FilmText();
       $film_text->title=$title;
       $film_text->description=$description;
       $film_text->film()->associate($film);
       $film_text->save();

       

      
       Session::flash('message','Pelicula creada correctamente');
       return Redirect::to('/film');


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

        $film = Film::find($id);
        $filmText = FilmText::find($id);
        //$filmText->title;
        //dd( $filmText->description);
         
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $actors = Actor::orderBy('first_name','ASC')->pluck('first_name','id');
        $languages = Language::orderBy('name','ASC')->pluck('name','id');

        $my_actors = $film->actors->pluck('id')->ToArray();
        $my_categories = $film->categories->pluck('id')->ToArray();

        //dd($my_categories);
       
        return view('film.edit',['film'=>$film])  
               ->with('categories', $categories)          
               ->with('actors', $actors)
               ->with('languages', $languages)
               ->with('filmText',$filmText)
               ->with('my_actors',$my_actors)
               ->with('my_categories',$my_categories);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFilmRequest $request, $id)
    {
        $film = Film::find($id);
        $film->fill($request->all());
        $film->save();
        
        $film->actors()->sync($request->actor_id);
        $film->categories()->sync($request->category_id);

        $title= Input::get('title2');
        $description=Input::get('description2');

        $film_text = FilmText::find($id);     
        $film_text->title=$title;
        $film_text->description=$description;
        $film->fill($request->all());
        //$film_text->film()->associate($film);
        $film_text->save();
      

        Session::flash('message','Pelicula actualizada correctamente');
        return Redirect::to('/film');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //Film::destroy($id);
         $film = Film::find($id);
         $film->delete();
         
         Session::flash('message','Pelicula eliminada correctamente');
         return Redirect::to('/film');
    }
}
