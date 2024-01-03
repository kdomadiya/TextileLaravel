<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     */
    public function run()
    {
        User::insert(array(
            array('id' => '1','name' => 'Admin','username'=>'kdomdiya','role' => 'admin','email' => 'admin@shanti.com','email_verified_at' => NULL,'password' => Hash::make('Shanti123'),'phone' => '9563215232','remember_token' => NULL,'status' => 1),
          ));
    }
}