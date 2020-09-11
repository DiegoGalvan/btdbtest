<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'filename',
        'extension',
        'mime_type',
        'alt_text',
        'type',
        'fileable_id',
        'fileable_type',
    ];

    public function fileables() {
        return $this->morphTo();
    }
}
