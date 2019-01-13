<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('users')->insert([            [
	            'name' => 'John Joshua Jamora',
	            'username' => 'jjamora0021',
	            'email' => 'jjamora0021@gmail.com',
	            'password' => bcrypt('password'),
	            'token' => str_random(40) . time(),
	            'user_role' => 'admin',
	            'created_at' => $now,
	            'updated_at' => $now
        	],
	        [
	            'name' => 'Jeff Dino',
	            'username' => 'jeffdino',
	            'email' => 'jeffdino@example.com',
	            'password' => bcrypt('password'),
	            'token' => str_random(40) . time(),
	            'user_role' => 'staff',
	            'created_at' => $now,
	            'updated_at' => $now
	        ]
	    ]);
    }
}
