<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([ 
        				'name' => 'Admin',
        				'email' => 'admin@admin.com', 
        				'password' => \Hash::make('admin1'), 
        				'isAdmin' => 1
        ]);

         DB::table('users')->insert([ 
        				'name' => 'Ariel',
        				'email' => 'ariel@grasso.com', 
        				'password' => \Hash::make('ariel2')
        ]);

         DB::table('users')->insert([ 
        				'name' => 'Letizia',
        				'email' => 'letizia@sposato.com', 
        				'password' => \Hash::make('letizia')
        ]);
    }
}
