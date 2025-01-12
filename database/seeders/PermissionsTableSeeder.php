<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'product_create',
            ],
            [
                'id'    => 29,
                'title' => 'product_edit',
            ],
            [
                'id'    => 30,
                'title' => 'product_show',
            ],
            [
                'id'    => 31,
                'title' => 'product_delete',
            ],
            [
                'id'    => 32,
                'title' => 'product_access',
            ],
            [
                'id'    => 33,
                'title' => 'static_seo_create',
            ],
            [
                'id'    => 34,
                'title' => 'static_seo_edit',
            ],
            [
                'id'    => 35,
                'title' => 'static_seo_show',
            ],
            [
                'id'    => 36,
                'title' => 'static_seo_delete',
            ],
            [
                'id'    => 37,
                'title' => 'static_seo_access',
            ],
            [
                'id'    => 38,
                'title' => 'technical_spec_create',
            ],
            [
                'id'    => 39,
                'title' => 'technical_spec_edit',
            ],
            [
                'id'    => 40,
                'title' => 'technical_spec_show',
            ],
            [
                'id'    => 41,
                'title' => 'technical_spec_delete',
            ],
            [
                'id'    => 42,
                'title' => 'technical_spec_access',
            ],
            [
                'id'    => 43,
                'title' => 'brand_create',
            ],
            [
                'id'    => 44,
                'title' => 'brand_edit',
            ],
            [
                'id'    => 45,
                'title' => 'brand_show',
            ],
            [
                'id'    => 46,
                'title' => 'brand_delete',
            ],
            [
                'id'    => 47,
                'title' => 'brand_access',
            ],
            [
                'id'    => 48,
                'title' => 'feature_create',
            ],
            [
                'id'    => 49,
                'title' => 'feature_edit',
            ],
            [
                'id'    => 50,
                'title' => 'feature_show',
            ],
            [
                'id'    => 51,
                'title' => 'feature_delete',
            ],
            [
                'id'    => 52,
                'title' => 'feature_access',
            ],
            [
                'id'    => 53,
                'title' => 'product_type_create',
            ],
            [
                'id'    => 54,
                'title' => 'product_type_edit',
            ],
            [
                'id'    => 55,
                'title' => 'product_type_show',
            ],
            [
                'id'    => 56,
                'title' => 'product_type_delete',
            ],
            [
                'id'    => 57,
                'title' => 'product_type_access',
            ],
            [
                'id'    => 58,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 59,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 60,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 61,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 62,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 63,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 64,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 65,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 66,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 67,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 68,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 69,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 70,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 71,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 72,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 73,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 74,
                'title' => 'post_create',
            ],
            [
                'id'    => 75,
                'title' => 'post_edit',
            ],
            [
                'id'    => 76,
                'title' => 'post_show',
            ],
            [
                'id'    => 77,
                'title' => 'post_delete',
            ],
            [
                'id'    => 78,
                'title' => 'post_access',
            ],
            [
                'id'    => 79,
                'title' => 'slider_create',
            ],
            [
                'id'    => 80,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 81,
                'title' => 'slider_show',
            ],
            [
                'id'    => 82,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 83,
                'title' => 'slider_access',
            ],
            [
                'id'    => 84,
                'title' => 'setting_create',
            ],
            [
                'id'    => 85,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 86,
                'title' => 'setting_show',
            ],
            [
                'id'    => 87,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 88,
                'title' => 'setting_access',
            ],
            [
                'id'    => 89,
                'title' => 'review_create',
            ],
            [
                'id'    => 90,
                'title' => 'review_edit',
            ],
            [
                'id'    => 91,
                'title' => 'review_show',
            ],
            [
                'id'    => 92,
                'title' => 'review_delete',
            ],
            [
                'id'    => 93,
                'title' => 'review_access',
            ],
            [
                'id'    => 94,
                'title' => 'build_create',
            ],
            [
                'id'    => 95,
                'title' => 'build_edit',
            ],
            [
                'id'    => 96,
                'title' => 'build_show',
            ],
            [
                'id'    => 97,
                'title' => 'build_delete',
            ],
            [
                'id'    => 98,
                'title' => 'build_access',
            ],
            [
                'id'    => 99,
                'title' => 'brand_model_create',
            ],
            [
                'id'    => 100,
                'title' => 'brand_model_edit',
            ],
            [
                'id'    => 101,
                'title' => 'brand_model_show',
            ],
            [
                'id'    => 102,
                'title' => 'brand_model_delete',
            ],
            [
                'id'    => 103,
                'title' => 'brand_model_access',
            ],
            [
                'id'    => 104,
                'title' => 'snippet_create',
            ],
            [
                'id'    => 105,
                'title' => 'snippet_edit',
            ],
            [
                'id'    => 106,
                'title' => 'snippet_show',
            ],
            [
                'id'    => 107,
                'title' => 'snippet_delete',
            ],
            [
                'id'    => 108,
                'title' => 'snippet_access',
            ],
            [
                'id'    => 109,
                'title' => 'content_section_create',
            ],
            [
                'id'    => 110,
                'title' => 'content_section_edit',
            ],
            [
                'id'    => 111,
                'title' => 'content_section_show',
            ],
            [
                'id'    => 112,
                'title' => 'content_section_delete',
            ],
            [
                'id'    => 113,
                'title' => 'content_section_access',
            ],
            [
                'id'    => 114,
                'title' => 'pagesection_create',
            ],
            [
                'id'    => 115,
                'title' => 'pagesection_edit',
            ],
            [
                'id'    => 116,
                'title' => 'pagesection_show',
            ],
            [
                'id'    => 117,
                'title' => 'pagesection_delete',
            ],
            [
                'id'    => 118,
                'title' => 'pagesection_access',
            ],
            [
                'id'    => 119,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 120,
                'title' => 'media_library_access',
            ],
            [
                'id'    => 121,
                'title' => 'media_library_create',
            ],
        ];

        Permission::insert($permissions);
    }
}
