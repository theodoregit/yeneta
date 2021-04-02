<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'id',
        'stud_id',
        'course_code',
            //$table->foreign('CourseCode')->references('dept_name')->on('departments');
        'assessment',
        'mid_exam',
        'final_exam',
        'total',
        'grade_type',
        'is_promoted',            
    ];
}
