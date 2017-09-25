<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taproom extends Model
{
    /**
     * A User has many Taprooms(Taps)
     */
    public function user()
    {
        $this->hasMany(User::class);
    }
}
