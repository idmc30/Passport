<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //indicando los campos que se van a guardar en la base

    protected $fillable=['title','body'];
     

}
