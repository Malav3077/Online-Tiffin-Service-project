<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admindetails extends Model
{
    use HasFactory;

    protected $table = 'Admindetails';
    protected $fillable = ['username', 'password'];
}
