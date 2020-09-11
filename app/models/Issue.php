<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Issue extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name',
        'release_date',
        'content',
        'business_id',
        'newsletter_id',
        'status_id',
    ];

    // One issue belongs to one newsletter
    public function newsletter() {
        return $this->belongsTo(Newsletter::class);
    }

    // One issue has one related business
    public function business() {
        return $this->belongsTo(Business::class);
    }

    // One story has one status
    public function status() {
        return $this->belongsTo(Status::class);
    }
}
