<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
      protected $table = 'cities';
    
	    protected $fillable = [
	   'city',
	   'country_id',   
	   ];
}
