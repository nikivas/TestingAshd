<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UserTest;

class Test extends Model
{
    protected $table = 'tests';
    
    public static function getTableName(){
        return 'tests';
    }

    protected $fillable = [
        'name',
        'description',
        'ball',
        'variables',
        'answer',
        'type'
    ];

    

    public function tests_users(){
        return $this->hasMany(UserTest::class, 'test_id', 'id');
    }

}
