<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Creates new taproom entry
     * @param Taproom $taproom
     */
    public function publish(Taproom $taproom)
    {
        $this->taproom()->save($taproom);
    }

    /**
     * A User has many Events
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany(Events::class);
    }

    /**
     * A User has many Taproom(Taps)
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function taproom()
    {
        return $this->hasMany(Taproom::class);
    }

    /**
     * A User has many Jobs
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobs()
    {
        return $this->hasMany(Jobs::class);
    }
}
