<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
      protected $table = 'addresses';
    
    protected $fillable = [
   'address',
   'address2',
   'district',
   'city_id',
   'postal_code',
   'phone',
    
   ];

    public function city()
   {
   	 return $this->belongsTo('App\City');
   }

    public function stores()
   {
     return $this->hasMany('App\Stores');
   }

    public function staff()
   {
     return $this->hasMany('App\Staff');
   }

    public function customer()
   {
     return $this->hasMany('App\Customer');
   }
}
