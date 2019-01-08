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
        $user = new User();
        $user->empleado_id = 1;
        $user->role_id     = 1;
        $user->username    = 'edward';
        $user->email       = 'edwardlopez.huem@gmail.com';
        $user->password    = bcrypt('123456');
        $user->save();


        $user2 = new User();
        $user2->empleado_id = 2;
        $user2->role_id     = 3;
        $user2->username    = 'edward2';
        $user2->email       = 'edwardlopez2.huem@gmail.com';
        $user2->password    = bcrypt('123456');
        $user2->save();

    }
}
