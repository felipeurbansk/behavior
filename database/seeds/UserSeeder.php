<?php

use Illuminate\Database\Seeder;
use LaraDev\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "Felipe Urbanski";
        $user->email = "felipeurbansk@gmail.com";
        $user->password = bcrypt("123456");

        $user->save();
    }
}
