<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actors';

    protected $fillable = [
   'first_name',
   'last_name',
   ];
}
