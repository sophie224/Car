<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'email'=>'admin@car.ge',
        	'password'=>bcrypt('tazo123'),
        	'name'=>'admin',
            'type'=>'admin',
        ]);
        
    }
}
