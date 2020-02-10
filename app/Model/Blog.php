<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable = [
        'title',
        'post',
        'author',
        'status',
        'approve'
    ];


    //
}
