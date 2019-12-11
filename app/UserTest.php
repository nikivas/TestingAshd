<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    protected $table = 'users_tests';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'test_id',
        'is_solved'
    ];

    public function test(){
        return $this->belongsTo(Test::class, 'test_id');
    }

}
