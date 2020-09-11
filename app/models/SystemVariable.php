<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemVariable extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'fb_url',
        'ig_url',
        'tw_url',
        'misc_urls',
    ];

    // One systemvariable has many images
    public function image() {
        return $this->morphMany(File::class, 'fileable');
    }
}