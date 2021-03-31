<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [ 
        'Stud_ID',
        'full_name',
        'gender',
        'dept_id',
        'section',
        'SGPA',
        'CGPA',
        'year',
        'semester',
        'IsPaid',
        'IsPromoted'
    ];
     public function user()
     {
         return $this->belongsTo(User::class);
     }
 
     public function setIsPaidAttribute($value)
     {
         $this->paid_at = $value ? Carbon::now() : null;
     }
 
     public function getIsPaidAttribute()
     {
         return !!$this->paid_at;
     }
 }
 

