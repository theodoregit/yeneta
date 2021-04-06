<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [ 
        'id',
        'fullname',
        'employee_id',
        'department',
        'course',
        'mobile_number',
        'email',        
    ];
}
