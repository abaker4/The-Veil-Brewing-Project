<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Events extends Model
{
    public function user ()
    {

        return $this->belongsTo(User::class);
    }


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [

        'start',

        'end',

        'created_at',

        'updated_at'

    ];


    protected $dateFormat = 'Y-m-d H:i:s';



    public function getStart()
    {

        return date("h:ia F tS Y", strtotime($this->start));
    }


}
