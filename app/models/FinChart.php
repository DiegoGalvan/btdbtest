<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FinChart extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name',
        'currency',
        'amount',
        'percent',
        'date',
    ];
}
