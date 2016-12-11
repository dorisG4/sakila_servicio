<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Category;
use Session;
use Redirect;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::All();
        // return view('category.index', compact('categories'));

        $categories=Category::orderBy('id','ASC')->paginate(3);
        // $categories=Category::name($request->get('name'))->orderBy('id','ASC')->paginate(3);
        return view('category.index', compact('categories'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Category::create([
            'name' => $request['name'],
            ]);

         Session::flash('message','Category Creada Correctamente');
         return Redirect::to('/category');
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
        $category = Category::find($id);
        return view('category.edit',['category'=>$category]);
      
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
         $category = Category::find($id);
         $category->fill($request->all());
         $category->save();

         Session::flash('message','Categoria Actualizada Correctamente');
         return Redirect::to('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        Session::flash('message','Categoria Eliminada Correctamente');
         return Redirect::to('/category');

    }

    // public function scopeName($query,$name)
    // {
    //     $query->where('name',$name);
    // }
}
