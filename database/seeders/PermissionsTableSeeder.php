<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'title' => 'user_management_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'title' => 'permission_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            2 =>
                array (
                    'id' => 3,
                    'title' => 'permission_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            3 =>
                array (
                    'id' => 4,
                    'title' => 'permission_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            4 =>
                array (
                    'id' => 5,
                    'title' => 'permission_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            5 =>
                array (
                    'id' => 6,
                    'title' => 'permission_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            6 =>
                array (
                    'id' => 7,
                    'title' => 'role_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            7 =>
                array (
                    'id' => 8,
                    'title' => 'role_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            8 =>
                array (
                    'id' => 9,
                    'title' => 'role_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            9 =>
                array (
                    'id' => 10,
                    'title' => 'role_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            10 =>
                array (
                    'id' => 11,
                    'title' => 'role_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            11 =>
                array (
                    'id' => 12,
                    'title' => 'user_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            12 =>
                array (
                    'id' => 13,
                    'title' => 'user_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            13 =>
                array (
                    'id' => 14,
                    'title' => 'user_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            14 =>
                array (
                    'id' => 15,
                    'title' => 'user_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            15 =>
                array (
                    'id' => 16,
                    'title' => 'user_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            16 =>
                array (
                    'id' => 17,
                    'title' => 'product_management_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            17 =>
                array (
                    'id' => 18,
                    'title' => 'product_category_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            18 =>
                array (
                    'id' => 19,
                    'title' => 'product_category_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            19 =>
                array (
                    'id' => 20,
                    'title' => 'product_category_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            20 =>
                array (
                    'id' => 21,
                    'title' => 'product_category_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            21 =>
                array (
                    'id' => 22,
                    'title' => 'product_category_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            22 =>
                array (
                    'id' => 23,
                    'title' => 'product_tag_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            23 =>
                array (
                    'id' => 24,
                    'title' => 'product_tag_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            24 =>
                array (
                    'id' => 25,
                    'title' => 'product_tag_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            25 =>
                array (
                    'id' => 26,
                    'title' => 'product_tag_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            26 =>
                array (
                    'id' => 27,
                    'title' => 'product_tag_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            27 =>
                array (
                    'id' => 28,
                    'title' => 'product_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            28 =>
                array (
                    'id' => 29,
                    'title' => 'product_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            29 =>
                array (
                    'id' => 30,
                    'title' => 'product_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            30 =>
                array (
                    'id' => 31,
                    'title' => 'product_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            31 =>
                array (
                    'id' => 32,
                    'title' => 'product_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            32 =>
                array (
                    'id' => 33,
                    'title' => 'static_seo_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            33 =>
                array (
                    'id' => 34,
                    'title' => 'static_seo_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            34 =>
                array (
                    'id' => 35,
                    'title' => 'static_seo_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            35 =>
                array (
                    'id' => 36,
                    'title' => 'static_seo_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            36 =>
                array (
                    'id' => 37,
                    'title' => 'static_seo_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            37 =>
                array (
                    'id' => 38,
                    'title' => 'technical_spec_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            38 =>
                array (
                    'id' => 39,
                    'title' => 'technical_spec_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            39 =>
                array (
                    'id' => 40,
                    'title' => 'technical_spec_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            40 =>
                array (
                    'id' => 41,
                    'title' => 'technical_spec_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            41 =>
                array (
                    'id' => 42,
                    'title' => 'technical_spec_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            42 =>
                array (
                    'id' => 43,
                    'title' => 'brand_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            43 =>
                array (
                    'id' => 44,
                    'title' => 'brand_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            44 =>
                array (
                    'id' => 45,
                    'title' => 'brand_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            45 =>
                array (
                    'id' => 46,
                    'title' => 'brand_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            46 =>
                array (
                    'id' => 47,
                    'title' => 'brand_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            47 =>
                array (
                    'id' => 48,
                    'title' => 'feature_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            48 =>
                array (
                    'id' => 49,
                    'title' => 'feature_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            49 =>
                array (
                    'id' => 50,
                    'title' => 'feature_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            50 =>
                array (
                    'id' => 51,
                    'title' => 'feature_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            51 =>
                array (
                    'id' => 52,
                    'title' => 'feature_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            52 =>
                array (
                    'id' => 53,
                    'title' => 'product_type_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            53 =>
                array (
                    'id' => 54,
                    'title' => 'product_type_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            54 =>
                array (
                    'id' => 55,
                    'title' => 'product_type_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            55 =>
                array (
                    'id' => 56,
                    'title' => 'product_type_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            56 =>
                array (
                    'id' => 57,
                    'title' => 'product_type_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            57 =>
                array (
                    'id' => 58,
                    'title' => 'content_management_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            58 =>
                array (
                    'id' => 59,
                    'title' => 'content_category_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            59 =>
                array (
                    'id' => 60,
                    'title' => 'content_category_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            60 =>
                array (
                    'id' => 61,
                    'title' => 'content_category_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            61 =>
                array (
                    'id' => 62,
                    'title' => 'content_category_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            62 =>
                array (
                    'id' => 63,
                    'title' => 'content_category_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            63 =>
                array (
                    'id' => 64,
                    'title' => 'content_tag_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            64 =>
                array (
                    'id' => 65,
                    'title' => 'content_tag_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            65 =>
                array (
                    'id' => 66,
                    'title' => 'content_tag_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            66 =>
                array (
                    'id' => 67,
                    'title' => 'content_tag_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            67 =>
                array (
                    'id' => 68,
                    'title' => 'content_tag_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            68 =>
                array (
                    'id' => 69,
                    'title' => 'content_page_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            69 =>
                array (
                    'id' => 70,
                    'title' => 'content_page_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            70 =>
                array (
                    'id' => 71,
                    'title' => 'content_page_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            71 =>
                array (
                    'id' => 72,
                    'title' => 'content_page_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            72 =>
                array (
                    'id' => 73,
                    'title' => 'content_page_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            73 =>
                array (
                    'id' => 74,
                    'title' => 'post_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            74 =>
                array (
                    'id' => 75,
                    'title' => 'post_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            75 =>
                array (
                    'id' => 76,
                    'title' => 'post_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            76 =>
                array (
                    'id' => 77,
                    'title' => 'post_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            77 =>
                array (
                    'id' => 78,
                    'title' => 'post_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            78 =>
                array (
                    'id' => 79,
                    'title' => 'slider_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            79 =>
                array (
                    'id' => 80,
                    'title' => 'slider_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            80 =>
                array (
                    'id' => 81,
                    'title' => 'slider_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            81 =>
                array (
                    'id' => 82,
                    'title' => 'slider_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            82 =>
                array (
                    'id' => 83,
                    'title' => 'slider_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            83 =>
                array (
                    'id' => 84,
                    'title' => 'setting_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            84 =>
                array (
                    'id' => 85,
                    'title' => 'setting_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            85 =>
                array (
                    'id' => 86,
                    'title' => 'setting_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            86 =>
                array (
                    'id' => 87,
                    'title' => 'setting_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            87 =>
                array (
                    'id' => 88,
                    'title' => 'setting_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            88 =>
                array (
                    'id' => 89,
                    'title' => 'review_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            89 =>
                array (
                    'id' => 90,
                    'title' => 'review_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            90 =>
                array (
                    'id' => 91,
                    'title' => 'review_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            91 =>
                array (
                    'id' => 92,
                    'title' => 'review_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            92 =>
                array (
                    'id' => 93,
                    'title' => 'review_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            93 =>
                array (
                    'id' => 94,
                    'title' => 'build_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            94 =>
                array (
                    'id' => 95,
                    'title' => 'build_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            95 =>
                array (
                    'id' => 96,
                    'title' => 'build_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            96 =>
                array (
                    'id' => 97,
                    'title' => 'build_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            97 =>
                array (
                    'id' => 98,
                    'title' => 'build_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            98 =>
                array (
                    'id' => 99,
                    'title' => 'brand_model_create',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            99 =>
                array (
                    'id' => 100,
                    'title' => 'brand_model_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            100 =>
                array (
                    'id' => 101,
                    'title' => 'brand_model_show',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            101 =>
                array (
                    'id' => 102,
                    'title' => 'brand_model_delete',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            102 =>
                array (
                    'id' => 103,
                    'title' => 'brand_model_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            103 =>
                array (
                    'id' => 104,
                    'title' => 'build_management_access',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            104 =>
                array (
                    'id' => 105,
                    'title' => 'profile_password_edit',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            105 =>
                array (
                    'id' => 106,
                    'title' => 'menu_access',
                    'created_at' => '2023-12-09 10:16:33',
                    'updated_at' => '2023-12-09 10:16:33',
                    'deleted_at' => NULL,
                ),
            106 =>
                array (
                    'id' => 107,
                    'title' => 'snippet_create',
                    'created_at' => '2024-02-16 15:49:06',
                    'updated_at' => '2024-02-16 15:49:06',
                    'deleted_at' => NULL,
                ),
            107 =>
                array (
                    'id' => 108,
                    'title' => 'snippet_edit',
                    'created_at' => '2024-02-16 15:49:12',
                    'updated_at' => '2024-02-16 15:49:12',
                    'deleted_at' => NULL,
                ),
            108 =>
                array (
                    'id' => 109,
                    'title' => 'snippet_show',
                    'created_at' => '2024-02-16 15:49:18',
                    'updated_at' => '2024-02-16 15:49:18',
                    'deleted_at' => NULL,
                ),
            109 =>
                array (
                    'id' => 110,
                    'title' => 'snippet_delete',
                    'created_at' => '2024-02-16 15:49:26',
                    'updated_at' => '2024-02-16 15:49:26',
                    'deleted_at' => NULL,
                ),
            110 =>
                array (
                    'id' => 111,
                    'title' => 'snippet_access',
                    'created_at' => '2024-02-16 15:49:34',
                    'updated_at' => '2024-02-16 15:49:34',
                    'deleted_at' => NULL,
                ),
        ));


    }
}
