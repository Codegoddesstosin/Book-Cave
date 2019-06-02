<?php

namespace App;
 
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class like extends Eloquent
{
    public function user()
    {
     return $this->belongsTo('App\User');
    }


    public function book()
    {
     return $this->belongsTo('App\Book');
    }


}
