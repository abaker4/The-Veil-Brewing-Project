<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    /**
     * super class that acts as a blanket $guarded method for all models and protects against mass assignment
     * @var array
     */
    protected $guarded = [];
}
