<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();

        User::create([
        	'name' => 'Admin',
        	'password' => Hash::make('admin@123'),
        	'email'	=> 'admin@email.com',

        ]);
    }
}
