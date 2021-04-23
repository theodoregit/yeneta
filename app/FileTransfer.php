<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileTransfer extends Model
{

    protected $fillable = [
        'receiver', 'title', 'details', 'fileupload'
    ];

}
