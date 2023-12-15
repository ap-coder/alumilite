<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'published' => 1,
                'name' => 'Arctic Cat',
                'description' => NULL,
                'slug' => 'arctic-cat',
                'created_at' => '2023-12-15 00:41:33',
                'updated_at' => '2023-12-15 00:41:33',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'published' => 1,
                'name' => 'Argo',
                'description' => NULL,
                'slug' => 'argo',
                'created_at' => '2023-12-15 00:41:51',
                'updated_at' => '2023-12-15 00:41:51',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'published' => 1,
                'name' => 'CanAm',
                'description' => NULL,
                'slug' => 'can-am',
                'created_at' => '2023-12-15 00:42:39',
                'updated_at' => '2023-12-15 00:42:51',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'published' => 1,
                'name' => 'Honda',
                'description' => NULL,
                'slug' => 'honda',
                'created_at' => '2023-12-15 00:50:33',
                'updated_at' => '2023-12-15 00:50:33',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'published' => 1,
                'name' => 'Kawasaki',
                'description' => NULL,
                'slug' => 'kawasaki',
                'created_at' => '2023-12-15 00:50:49',
                'updated_at' => '2023-12-15 00:50:49',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'published' => 1,
                'name' => 'Polaris',
                'description' => NULL,
                'slug' => 'polaris',
                'created_at' => '2023-12-15 00:51:13',
                'updated_at' => '2023-12-15 00:51:13',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'published' => 1,
                'name' => 'Yamaha',
                'description' => NULL,
                'slug' => 'yamaha',
                'created_at' => '2023-12-15 00:51:37',
                'updated_at' => '2023-12-15 00:51:37',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}