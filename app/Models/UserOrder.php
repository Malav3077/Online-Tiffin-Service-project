<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    use HasFactory;

    protected $table = 'userorders'; // Ensure this matches your actual table name in the database

    protected $primaryKey = 'user_id'; // Adjust if your primary key is different

    protected $fillable = [
       
        'customername',
        'email',
        'contact',
        'tiffintype',
        'cost',
        'quantity',
        'total',
        'from_date',
        'to_date',
        'totalovercost',
        'time',
        'address',
        'status'
    ];
}
