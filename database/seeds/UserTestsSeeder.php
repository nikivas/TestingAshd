<?php

use Illuminate\Database\Seeder;

class UserTestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i=0; $i<10; $i++){
            if($i % 3 == 0)
                continue;
            DB::table('users_tests')->insert([
                'id' => $i*10,
                'user_id' => 1,
                'test_id' => $i*10,
                'is_solved' => $i % 2 == 0 ? 1 : 0
            ]);
        }
    }
}
