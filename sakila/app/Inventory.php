<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
     protected $table= 'inventories';

     protected $fillable = [
	   'film_text_id',
	   'store_id',
   
   ];

     public function filmTexts()
   {
   	 return $this->belongsTo('App\FilmText');
   }

     public function stores()
   {
   	 return $this->belongsTo('App\Store');
   }
}
