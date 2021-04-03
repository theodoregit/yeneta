<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer_Science extends Model
{
    protected $fillable = [ 
        'id',
        'dept_name',
        'course_code',
        'course_title',
        'ects',
        'credit_hrs',
        'lecture_hrs',
        'lab_hrs',
        'tutor_hrs',
        'prerequisite',
        'corequisite',
        'instructor_name',
        'year',
        'semester',
    ];
}
