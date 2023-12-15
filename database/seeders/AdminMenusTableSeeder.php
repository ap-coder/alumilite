<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menus')->delete();
        
        \DB::table('admin_menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Main Menu',
                'created_at' => '2023-12-12 00:15:52',
                'updated_at' => '2023-12-12 00:15:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Footer Widget Menu',
                'created_at' => '2023-12-12 00:19:48',
                'updated_at' => '2023-12-13 01:46:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Footer Links Menu',
                'created_at' => '2023-12-14 17:10:30',
                'updated_at' => '2023-12-14 17:10:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Copyright Menu',
                'created_at' => '2023-12-14 17:11:41',
                'updated_at' => '2023-12-14 17:11:41',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Builds Sidebar Menu',
                'created_at' => '2023-12-14 17:15:40',
                'updated_at' => '2023-12-14 17:15:52',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Blog Sidebar Menu',
                'created_at' => '2023-12-14 17:16:59',
                'updated_at' => '2023-12-14 17:16:59',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Products Sidebar Menu',
                'created_at' => '2023-12-14 17:17:13',
                'updated_at' => '2023-12-14 17:17:13',
            ),
        ));
        
        
    }
}