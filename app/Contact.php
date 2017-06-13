<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function newsletter()
    {
        return $this->belongsToMany(Newsletter::class);
    }
}
