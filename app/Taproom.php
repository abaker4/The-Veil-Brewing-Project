<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taproom extends Model
{
    public function user()
    {

        $this->hasMany(User::class);
    }
}
