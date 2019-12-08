<?php

use Illuminate\Database\Seeder;
use \Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Никита',   
            'lastname' => 'Васильев',
            'login' => 'nikivas',
            'password' => Hash::make('chensven'),
            'isAdmin' => 1,
        ]);

        $faker = Faker::create();
        for( $i=0; $i<10; $i++){
            DB::table('users')->insert([
                'id' => $i*10,
                'name' => $faker->word(),  
                'lastname' => $faker->word(), 
                'login' => $faker->email(),
                'password' => Hash::make('PASSWORDD'),
                'isAdmin' => $i % 2 > 0 ? 1 : 0,
            ]);
        }
    }
}
