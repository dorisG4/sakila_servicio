<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table= 'managers';

     protected $fillable = [
       'store_id',
	     'staff_id',
       // 'manager_staff_id',
   
   ];


    public function staff()
   {
     return $this->belongsTo('App\Staff');
   }


     public function store()
   {
   	 return $this->belongsTo('App\Store');
   }

}


 
