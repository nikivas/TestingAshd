<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFlag extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'flag_id'
    ];


}
