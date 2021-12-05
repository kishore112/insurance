<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[
        [
            'name' => 'Admin',
            'email' =>'admin@insurance.com',
            'isadmin' => '1',
            'password' => bcrypt('123456'),
        ],
        [
            'name' =>'user',
            'email' => 'user@insurance.com',
            'isadmin' => '0',
            'password' => bcrypt('123456'),
        ],
    ];
       foreach($user as $key => $value)
        {
            User::create($value);
        }
    }
}