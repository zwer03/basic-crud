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
        $password = Hash::make('12345678');

        User::create([
            'name' => 'Information Technology',
            'email' => 'infotech@sample.com.ph',
            'password' => $password
        ]);
    }
}