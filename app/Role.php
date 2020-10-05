<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // add this to relational with to user
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
