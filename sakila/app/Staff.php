<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
     protected $table= 'staff';

     protected $fillable = [
	   'first_name',
	   'last_name',
	   'address_id',
	   'picture',
	   'email',
	   'store_id',
	   'active',
	   'username',
	   'password',
   
   ];
}
