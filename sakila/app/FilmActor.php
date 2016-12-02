<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmActor extends Model
{
   protected $table = 'film_actors';
    
    protected $fillable = [
   'actor_id',
   'film_id',
   
   ];
}
