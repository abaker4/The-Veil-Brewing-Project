<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Events extends Model
{
    /**
     * Events belongs to a User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user ()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = [

        'start',

        'end',

        'created_at',

        'updated_at'

    ];


    /**
     * The date time format for the rest of the application
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';


    /**
     * date time formatting for start dates
     * @return false|string
     */
    public function getStart()
    {
        return date("h:ia F tS Y", strtotime($this->start));
    }


}
