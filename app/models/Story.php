<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Story extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'author',
        'title',
        'abstract',
        'content',
        'keywords',
        'status_id',
        'image_id',
        'category_id',
        //'tag_id',
    ];

    // One story has one status
    public function status() {
        return $this->belongsTo(Status::class);
    }

    // One story has many images
    public function image() {
        return $this->morphMany(File::class, 'fileable');
    }

    // One story will have one category
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // FIGURE THIS ONE OUT WHEN NEEDED
    // // One story will have many tags
    // public function tags() {
    //     return $this->belongsTo(Tag::class);
    // }
}
