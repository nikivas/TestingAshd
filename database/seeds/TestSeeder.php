<?php

use Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for( $i=0; $i<10; $i++){
            DB::table('tests')->insert([
                'id' => $i*10,
                'name' => $faker->word(),   
                'description' => $faker->text(),
                'ball' => 100,
                'type' => 'one',
                'variables' => '[{"id" : 1, "text": "first var"} , {"id" : 2,"text": "fourth var"} , {"id" : 3,"text": "third var"} , {"id" : 4,"text": "last var"} , ]',
                'answer' => '{"id" : 2}'
            ]);
        }

        
    }
}
