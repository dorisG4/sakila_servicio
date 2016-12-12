<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';
    
    protected $fillable = [
   'name', 
   ];
   
    public function scopeSearch($query, $name)
   {
   	return $query->where('name', 'LIKE', "%$name%");
   }
}
