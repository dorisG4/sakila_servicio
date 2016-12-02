<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
     protected $table = 'films';
    
    protected $fillable = [
   'title',
   'description',
   'release_year',
   'language_id',
   'original_language_id',
   'rental_duration',
   'rental_rate',
   'length',
   'replacement_cost',
   'rating',
   'special_features',
   
   ];
}
