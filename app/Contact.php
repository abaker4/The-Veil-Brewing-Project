<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    public $guarded = [];

    /**
     * Newsletter belongs to many Contacts
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function newsletter()
    {
        return $this->belongsToMany(Newsletter::class);
    }

}
