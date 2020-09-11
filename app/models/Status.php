<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name',
        'display_name',
        'description',
        'class',
        'type',
    ];

}
