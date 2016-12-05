<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
    	return view('index');
    }
    public function contacto(){
    	return view('contacto');
    }
    public function reviews(){
    	return view('reviews');
    }
    public function admin(){
        return view('admin.index');
   }
}
