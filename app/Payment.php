<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [ 
        'id',
        'fullname',
        'idnumber',
        'dept_name',
        'amount',
        'penality',
        'total',
        '11',
    ];
}
