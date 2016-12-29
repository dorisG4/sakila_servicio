<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

class FrontController extends Controller
{
    
    public function __construct()
        {
            //$this->middleware('auth', ['only' => 'admin']);
             $this->middleware('auth', ['only' => 'admin']);  //bloque de acceso
        }
    
    public function index(){
    	return view('index');
    }

    // public function contacto(){
    // 	return view('contacto');
    // }
    // public function reviews(){
    // 	return view('reviews');
    // }
    public function admin(){
        return view('admin.index');
   }
}
