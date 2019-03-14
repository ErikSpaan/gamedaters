<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personal_page extends Model
{
    public function myevent() {
        
        return $this->hasMany(Personal_events::class);
    }
}
