<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{    
	protected $table= 'payments';

    protected $fillable = [
	   'customer_id',
	   'staff_id',
	   'rental_id',
	   'amount',
	   'payment_date',
   
   ];

     public function rental()
   {
   	 return $this->belongsTo('App\Rental');
   }
}
