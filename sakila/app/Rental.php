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
}
