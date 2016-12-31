<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
     protected $table= 'rentals';

     protected $fillable = [
	   'rental_date',
	   'inventory_id',
	   'customer_id',
	   'return_date',
	   'staff_id',  
   ];

    public function payment()
   {
   	  return $this->hasMany('App\Payment');
   }

     public function inventory()
   {
   	 return $this->belongsTo('App\Inventory');
   }

     public function customer()
   {
   	 return $this->belongsTo('App\Customer');
   }

     public function staff()
   {
   	 return $this->belongsTo('App\Staff');
   }
}
