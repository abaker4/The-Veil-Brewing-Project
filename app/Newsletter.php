<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    public function contact()
    {
        return $this->belongsToMany(Contact::class);
    }
}
