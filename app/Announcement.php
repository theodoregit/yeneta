<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  Announcement extends Model
{
    protected $fillable = [
        'title',
        'content',
        'CreatedFor',
        'FileUploaded'
    ];
    public function getFileUploadedAttribute($FileUploaded){
        return asset($FileUploaded);
    }
}
