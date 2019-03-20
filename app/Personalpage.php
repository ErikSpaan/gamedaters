<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personalpage extends Model
{
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }


} // end class
