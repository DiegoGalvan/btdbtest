<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name',
        'commercial_name',
        'rfc',
        'address',
        'contact_name',
        'contact_phone',
        'contact_email',
        'file_id',
    ];

    // One business has one image
    public function image() {
        return $this->morphOne(File::class, 'fileable');
    }
}
