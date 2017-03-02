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
}

C:\xampp\php;
C:\php\composer;
C:\Users\sync\AppData\Roaming\npm;
C:\Users\sync\AppData\Local\.meteor\;
C:\Users\sync\AppData\Local\atom\bin;
C:\Users\sync\AppData\Roaming\Composer\vendor\bin;
C:\Python34;
C:\Program Files\Docker Toolbox;

C:\xampp\php;C:\php\composer;C:\Users\sync\AppData\Roaming\npm;C:\Users\sync\AppData\Local\.meteor\;C:\Users\sync\AppData\Local\atom\bin;C:\Users\sync\AppData\Roaming\Composer\vendor\bin;C:\Python34;C:\Program Files\Docker Toolbox;
