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

    public function language()
   {
     return $this->belongsTo('App\Language');
   }

     public function originalLanguage()
   {
     return $this->belongsTo('App\Language');
   }

    public function filmText()
   {
     return $this->hasMany('App\FilmText');
   }
    
    public function categories()
   {
     return $this->belongsToMany('App\Category');
   }

    public function actors()
   {
     return $this->belongsToMany('App\Actor');
   }

   public function scopeSearch($query, $title)
   {
    return $query->where('title', 'LIKE', "%$title%");
   }

}
