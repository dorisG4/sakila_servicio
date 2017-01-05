<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
     
	 protected $table= 'stores';

     protected $fillable = [
	   'address_id',
   
   ];

      public function address()
   {
   	 return $this->belongsTo('App\Address');
   }

    public function staff()
   {
     return $this->hasMany('App\Staff');
   }

     public function customer()
   {
     return $this->hasMany('App\Customer');
   }

     public function inventory()
   {
     return $this->hasMany('App\Inventory');
   }

    public function manager()
   {
     return $this->hasMany('App\Manager');
   }

  
}
