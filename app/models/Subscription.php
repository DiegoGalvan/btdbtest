<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'newsletter_id',
        'user_id',
    ];

    // One subscription has one newsletter
    public function newsletter() {
        return $this->belongsTo(Newsletter::class);
    }
    // One subscription has one user
    public function user() {
        return $this->belongsTo(User::class);
    }
}
