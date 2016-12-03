<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
     protected $table= 'inventories';

     protected $fillable = [
	   'film_id',
	   'store_id',
   
   ];
}
