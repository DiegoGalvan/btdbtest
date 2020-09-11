<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FinCap extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name',
        'file_id',
    ];

    // One fincap has one image
    public function image() {
        return $this->belongsTo(File::class);
    }
}
