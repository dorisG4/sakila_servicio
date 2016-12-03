<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreStaff extends Model
{
     protected $table= 'store_staffs';

     protected $fillable = [
	   'manager_staff_id',
   
   ];
}
