<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, HasApiTokens,  Notifiable;
    protected $fillable = [
      //  'UserID',
        'Name',
        'Email',
        'Password',
        'PhoneNumber',
    ];
    protected $hidden = [
        'password',
       // 'remember_token',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updateded_at' => 'datetime',
        'password' => 'hashed',
    ];

}
