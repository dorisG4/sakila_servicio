<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmCategory extends Model
{
     protected $table = 'film_categories';
    
    protected $fillable = [
   'film_id',
   'category_id',
   
   ];
}
