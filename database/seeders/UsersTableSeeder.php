<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
                        [
                'id'             => 1,
                'name'           => 'Phillip',
                'email'          => 'phillip@mmi.io',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
                        [
                'id'             => 3,
                'name'           => 'Michael',
                'email'          => 'michael@mmi.io',
                'password'       => bcrypt('password2023'),
                'remember_token' => null,
            ],
                                    [
                'id'             => 4,
                'name'           => 'Troy Katwyk',
                'email'          => 'tkatwyk@gmail.com',
                'password'       => bcrypt('password2023'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
