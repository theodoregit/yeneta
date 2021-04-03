<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [ 
        'idnumber',
        'fullname',
        'gender',
        'dept_name',
        'section',
        'sgpa',
        'cgpa',
        'year',
        'semester',
        'id_paid',  
        'is_promoted'
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

    public function computer_sciences(){
        return $this->BelongsToMany('App\Computer_Science');
    }

    public function accountings(){
        return $this->BelongsToMany('App\Accounting');
    }
     
 }
 

