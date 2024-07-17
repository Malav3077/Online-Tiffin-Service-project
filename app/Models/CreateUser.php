<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CreateUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'createsusers';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'full_name',
        'contact_number',
        'address',
        'email',
        'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
