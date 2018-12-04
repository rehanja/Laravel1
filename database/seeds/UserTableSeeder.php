<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'rehan',
            'email' => 'rehanjananga2015@gmail.com'
           // 'password' => bcrypt'admins'



        ])
    }
}
