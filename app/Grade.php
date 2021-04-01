<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [ 
        'id',
        'stud_id',
        'stud_id',
        'CourseCode',
            //$table->foreign('CourseCode')->references('dept_name')->on('departments');
        'assessment',
        'total',
        'GradeType',
        'IsPromoted',            
    ];
}
