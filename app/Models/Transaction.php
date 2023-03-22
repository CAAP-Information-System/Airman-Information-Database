<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'approving_id',
        'endorsing_id',
        'ttype',
        'tdate',
        'datefinished',
        'remarks',
        'createdby',
        'issuedby'
    ];
}
