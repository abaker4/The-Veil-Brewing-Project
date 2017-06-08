<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function publish(Taproom $taproom)

    {

        $this->taproom()->save($taproom);

    }



    public function events()
    {
        return $this->hasMany(Events::class);

    }

    public function taproom()
    {
        return $this->hasMany(Taproom::class);

    }


    public function jobs()
    {

        return $this->hasMany(Jobs::class);
    }
}
