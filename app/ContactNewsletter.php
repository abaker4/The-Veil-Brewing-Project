<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactNewsletter extends Model
{

    /**
     * ContactsNewsletter belongs to many Contacts
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function contact()
    {
        return $this->belongsToMany(Contact::class);
    }

    /**
     * ContactNewsletter belongs to many Newsletters
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function newsletter()
    {
        return $this->belongsToMany(Newsletter::class);
    }
}
