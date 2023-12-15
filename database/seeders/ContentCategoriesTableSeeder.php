<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContentCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('content_categories')->delete();
        
        \DB::table('content_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Arctic Cat',
                'slug' => 'arctic-cat',
                'created_at' => '2023-12-09 04:33:04',
                'updated_at' => '2023-12-15 00:36:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Argo',
                'slug' => 'argo',
                'created_at' => '2023-12-09 04:33:04',
                'updated_at' => '2023-12-15 00:37:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'CanAm',
                'slug' => 'can-am',
                'created_at' => '2023-12-09 04:33:04',
                'updated_at' => '2023-12-15 00:37:57',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Honda',
                'slug' => 'honda',
                'created_at' => '2023-12-09 04:33:04',
                'updated_at' => '2023-12-15 00:38:24',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Kawasaki',
                'slug' => 'kawasaki',
                'created_at' => '2023-12-09 04:33:04',
                'updated_at' => '2023-12-15 00:38:44',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Polaris',
                'slug' => 'polaris',
                'created_at' => '2023-12-09 04:33:04',
                'updated_at' => '2023-12-15 00:39:04',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Yamaha',
                'slug' => 'yamaha',
                'created_at' => '2023-12-09 04:33:04',
                'updated_at' => '2023-12-15 00:40:23',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'molestiae ullam debitis',
                'slug' => 'qui-totam-ut-fugiat-omnis-blanditiis-est-amet',
                'created_at' => '2023-12-09 04:33:04',
                'updated_at' => '2023-12-15 00:40:26',
                'deleted_at' => '2023-12-15 00:40:26',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'doloribus dicta facilis',
                'slug' => 'voluptas-beatae-neque-atque-voluptatem-ipsa-ratione',
                'created_at' => '2023-12-09 04:33:04',
                'updated_at' => '2023-12-15 00:40:29',
                'deleted_at' => '2023-12-15 00:40:29',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'sit id eos',
                'slug' => 'laboriosam-hic-aspernatur-eos-sit',
                'created_at' => '2023-12-09 04:33:04',
                'updated_at' => '2023-12-15 00:40:32',
                'deleted_at' => '2023-12-15 00:40:32',
            ),
        ));
        
        
    }
}