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
	            'name' => 'Erick Mendiola',
	            'username' => 'erick0626',
	            'email' => 'erick0626@yahoo.com',
	            'password' => bcrypt('g7i1g1zgeb6v'),
	            'token' => str_random(40) . time(),
	            'user_role' => 'admin',
	            'created_at' => $now,
	            'updated_at' => $now
	        ],
	        [
	            'name' => 'Richelle Garalde',
	            'username' => 'richelle_g',
	            'email' => 'richelle.garalde@gmail.com',
	            'password' => bcrypt('0407garalde'),
	            'token' => str_random(40) . time(),
	            'user_role' => 'admin',
	            'created_at' => $now,
	            'updated_at' => $now
	        ]
	    ]);
    }
}
