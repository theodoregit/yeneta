<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $fillable = [ 
        'id',
        'dept_name',
        'CourseCode',
        'CourseTitle',
        'ECTS',
        'CrHrs',
        'LecHrs',
        'LabHrs',
        'TutHrs',
        'prerequiest',
        'corequiest',
        'InstructorName',
        'year',
        'semester',
    ];
}
