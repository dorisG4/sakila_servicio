<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $table = 'categories';
    
    protected $fillable = ['name'];

   public function scopeSearch($query, $name)
   {
   	return $query->where('name', 'LIKE', "%$name%");
   }

  public function films()
   {
     return $this->belongsToMany('App\Film')->withTimestamps();
   }
 }
