<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        $user = DB::table('users')->insert(array(
            'fname' => 'Super',
            'lname' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ));   
    }
}