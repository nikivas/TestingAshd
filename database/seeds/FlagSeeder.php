<?php

use Illuminate\Database\Seeder;

class FlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flags')->insert([
            'id' => 1,
            'text' => '1980',  
        ]);
        DB::table('flags')->insert([
            'id' => 2,
            'text' => 'рэндалл',  
        ]);
        DB::table('flags')->insert([
            'id' => 3,
            'text' => 'ньюкасл',
        ]);
    }
}
