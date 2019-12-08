<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';

    protected $casts = [
        'field_name' => 'array'
    ];

    protected $fillable = [
        'name',
        'description',
        'ball',
        'variables',
        'answer',
        'type'
    ];

}
