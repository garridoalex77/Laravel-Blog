<?php

class UserTableSeeder extends Seeder {
    
    public function run() {

        $user = new User();
        $user->email = 'garridoalex77@gmail.com';
        $user->username = 'alex';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();

        $user = new User();
        $user->email = 'foo@gmail.com';
        $user->username = 'Bar';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();
    }
}