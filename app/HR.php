<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HR extends Model
{
    protected $fillable = [ 
        'id',
        'EmployeeNAME',
        'adress',
        'mobile',
        'qulification',
        'expriance',
        'salary',
        'postion',
        'gender',
       'email',
        
    ];
}
