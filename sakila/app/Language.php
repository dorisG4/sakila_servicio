<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';
    
    protected $fillable = ['name'];

    
   
    public function scopeSearch($query, $name)
   {
   	return $query->where('name', 'LIKE', "%$name%");
   }

     public function films()
   {
     return $this->hasMany('App\Film');
   }

     public function originalfilms()
   {
     return $this->hasMany('App\Film');
   }
}
