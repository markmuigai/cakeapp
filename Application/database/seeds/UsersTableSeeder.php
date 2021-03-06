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
        $user = new User;
        $user->name = "mark";
        $user->email = "mark@dev.com";
        $user->password = bcrypt('secret');
        $user->is_admin = true;
        $user->save();
    }
}
