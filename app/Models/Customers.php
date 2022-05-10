<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'number',
        'firstname',
        'lastname',
        'email',
        'phone'
    ];

    protected $dates = ['created_at', 'updated_at'];
}
