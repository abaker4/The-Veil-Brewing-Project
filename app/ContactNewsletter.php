<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactNewsletter extends Model
{

    public function contact()
    {
        return $this->belongsToMany(Contact::class);


    }

    public function newsletter()
    {

        return $this->belongsToMany(Newsletter::class);
    }
}
