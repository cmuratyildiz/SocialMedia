<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins';
    public    $timestamps = false;

    protected $fillable = [
        'name','lastname', 'email', 'password','image','status'
    ];

}
