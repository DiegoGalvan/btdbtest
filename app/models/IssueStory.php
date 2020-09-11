<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IssueStory extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'order',
        'newsletter_id',
        'issue_id',
        'story_id',
    ];

    // One issuestory has one issue
    public function issue() {
        return $this->belongsTo(Issue::class);
    }
    // One issuestory has one story
    public function story() {
        return $this->belongsTo(Story::class);
    }
    // An issuestory will have one newsletter it belongs to
    public function newsletter() {
        return $this->belongsTo(Newsletter::class);
    }
}
