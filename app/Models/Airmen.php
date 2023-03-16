<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airmen extends Model
{
    protected $fillable = [
        'lname',
        'fname',
        'mname',
        'address',
        'city',
        'province',
        'nationality',
        'country',
        'postal',
        'mobile',
        'phone',
        'company',
        'email',
        'sex',
        'height',
        'weight',
        'hair',
        'eyes' 
    ];
}
