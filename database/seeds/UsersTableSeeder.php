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
            'nameWithInitials' => str_random(10),
            // 'email' => str_random(10).'@gmail.com',
            // 'password' => bcrypt('secret'),
            // 'active' => true,
            // 'activation_token' => str_random(60),
            // 'avatar' => 'avatar.png',
            // 'email_verified_at' => "2018-01-20"
        ]);
    }
}
