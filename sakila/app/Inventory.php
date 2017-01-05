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

     public function filmText()
   {
   	 return $this->belongsTo('App\FilmText');
   }

     public function store()
   {
   	 return $this->belongsTo('App\Store');
   }

     public function scopeSearch($query, $title)
   {
    //return $query->where('title', 'LIKE', "%$name%");
        return $query->where('title', 'LIKE', "%$title%");
   }

     public function rental()
   {
     return $this->hasMany('App\Rental');
   }
}
