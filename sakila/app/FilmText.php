<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmText extends Model
{
     protected $table = 'film_texts';
    
    protected $fillable = [
   'film_id',
   'title',
   'description',
   
   ];

   public function film()
   {
   	 return $this->belongsTo('App\Film');
   }
}
