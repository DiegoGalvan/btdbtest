<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // role_id in user table
    public function role() {
        return $this->belongsTo(Role::class);
    }
}
