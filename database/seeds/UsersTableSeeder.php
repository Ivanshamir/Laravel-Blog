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
        //
        $user = App\User::create([
            'name' => 'Shamir Imtiaz',
            'email' => 'shamir@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id'=>$user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iure ipsa mollitia porro voluptatem tempora laudantium earum rerum, alias, aliquam maxime dolor. Animi pariatur at amet, repudiandae atque non quas?',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
