<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Film;

class PruebaController extends Controller
{
    public function view($id)
	{
    
    $film= Film::find($id);
    $film->language;
    $film->actors;
    $film->categories;

    dd($film);

	}
}
