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

   protected $hidden = [
        'password', 'remember_token',
    ];
  
  
    // public function setPasswordAtribute($value){         
    //           $this->attributes['password'] = bcrypt($value);
    // }


    public function address()
   {
   	 return $this->belongsTo('App\Address');
   }

    public function store()
   {
   	 return $this->belongsTo('App\Store');
   }

}
