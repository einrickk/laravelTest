<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class employee extends Authenticatable 
{
    protected $fillable = [
        'email',
        'password',
        'api_token',
    ];
}
