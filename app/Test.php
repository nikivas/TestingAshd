<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';

    protected $fillable = [
        'name',
        'description',
        'ball',
        'variables',
        'answer',
        'type'
    ];

}
