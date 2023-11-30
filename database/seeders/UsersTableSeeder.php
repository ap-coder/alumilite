<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Phillip',
                'email' => 'phillip@mmi.io',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hWSjVIyJ9UdGrnI8AaOkKuzPXmGXUYeDagZfktjic1iR1xeyOh34G',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Cy0ioqJiA6lpw7S0T3nUBui0WYOtM8RUm2Kzadqwpo.ZL2ejMaom.',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Michael',
                'email' => 'michael@mmi.io',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sIeUJ11YZvEM1q0Nzg4xkOaNiXHHgumFviku2ZqkWkcwCveg69yqC',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Troy Katwyk',
                'email' => 'tkatwyk@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$U87bh/qo4jiyjbmS39Xr0.iRdPtDw2wQrB4329V.re2SUj1vIMjHu',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));


    }
} 
