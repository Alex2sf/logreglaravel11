<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Tambahkan role ke fillable
    ];

    protected $hidden = [
        'password',
    ];
}
