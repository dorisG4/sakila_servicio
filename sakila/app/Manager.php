<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table= 'store_staffs';

     protected $fillable = [
       'store_id',
	   'manager_staff_id',
   
   ];}
