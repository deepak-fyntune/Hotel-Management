<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements Authenticatable
{
    use Notifiable, AuthenticatableTrait;

    // ... your model code ...

    // For example, if your admins table has columns 'email' and 'password'
    protected $fillable = [
        'email', 'password',
    ];

    // ... other methods or properties ...
}
