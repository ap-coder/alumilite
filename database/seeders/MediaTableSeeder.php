<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('media')->delete();
        
        \DB::table('media')->insert(array (
            0 => 
            array (
                'id' => 2,
                'model_type' => 'App\\Models\\Brand',
                'model_id' => 2,
                'uuid' => '27a7d617-b8de-42dd-9a7e-2b33da031157',
                'collection_name' => 'logo',
                'name' => '6573d1f1b079a_honda-logo',
                'file_name' => '6573d1f1b079a_honda-logo.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 15967,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-09 02:33:27',
                'updated_at' => '2023-12-09 02:33:27',
            ),
            1 => 
            array (
                'id' => 3,
                'model_type' => 'App\\Models\\Brand',
                'model_id' => 3,
                'uuid' => '31fd56a3-0281-4ad4-9a50-e44ec69e8248',
                'collection_name' => 'logo',
            'name' => '6573d59d84796_logo-kawasaki (1)',
            'file_name' => '6573d59d84796_logo-kawasaki-(1).png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 11796,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-09 02:49:21',
                'updated_at' => '2023-12-09 02:49:21',
            ),
            2 => 
            array (
                'id' => 4,
                'model_type' => 'App\\Models\\Brand',
                'model_id' => 4,
                'uuid' => 'fd4e476a-d2dd-4b80-b929-c755688a14cc',
                'collection_name' => 'logo',
                'name' => '6573d5c01f441_Polaris-Logo',
                'file_name' => '6573d5c01f441_Polaris-Logo.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 15349,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-09 02:49:43',
                'updated_at' => '2023-12-09 02:49:43',
            ),
            3 => 
            array (
                'id' => 5,
                'model_type' => 'App\\Models\\Brand',
                'model_id' => 1,
                'uuid' => '2a3ad220-24fb-4cb3-a7bd-ccffcdda9832',
                'collection_name' => 'logo',
                'name' => '6573d6355be7f_LogoYamaha',
                'file_name' => '6573d6355be7f_LogoYamaha.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 27882,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-09 02:51:36',
                'updated_at' => '2023-12-09 02:51:36',
            ),
            4 => 
            array (
                'id' => 6,
                'model_type' => 'App\\Models\\Brand',
                'model_id' => 5,
                'uuid' => '10049956-6747-446f-9948-391a5c7d7d95',
                'collection_name' => 'logo',
                'name' => '6573d7f29401f_can-am-logo',
                'file_name' => '6573d7f29401f_can-am-logo.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 44192,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-09 02:59:17',
                'updated_at' => '2023-12-09 02:59:17',
            ),
            5 => 
            array (
                'id' => 7,
                'model_type' => 'App\\Models\\Brand',
                'model_id' => 6,
                'uuid' => 'c2d64d4f-8155-4919-8aeb-38bd7664f947',
                'collection_name' => 'logo',
                'name' => '6573d811d735f_argo_wide',
                'file_name' => '6573d811d735f_argo_wide.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 29630,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-09 02:59:37',
                'updated_at' => '2023-12-09 02:59:37',
            ),
            6 => 
            array (
                'id' => 8,
                'model_type' => 'App\\Models\\Brand',
                'model_id' => 7,
                'uuid' => '5c4c8571-b1e1-42c1-83f8-b747171c7e09',
                'collection_name' => 'logo',
                'name' => '6573d831812bc_arcticcat',
                'file_name' => '6573d831812bc_arcticcat.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 30039,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-09 03:00:06',
                'updated_at' => '2023-12-09 03:00:06',
            ),
            7 => 
            array (
                'id' => 9,
                'model_type' => 'App\\Models\\Review',
                'model_id' => 1,
                'uuid' => '5ae74457-9708-493c-bc3e-afb22309db92',
                'collection_name' => 'photo',
                'name' => '65740cb2472d0_5eb04af82bebb',
                'file_name' => '65740cb2472d0_5eb04af82bebb.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 220987,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-09 06:44:04',
                'updated_at' => '2023-12-09 06:44:04',
            ),
            8 => 
            array (
                'id' => 10,
                'model_type' => 'App\\Models\\Review',
                'model_id' => 2,
                'uuid' => 'ac3fa544-f36c-4227-96bb-72c0a826252a',
                'collection_name' => 'avatar',
                'name' => '65740d1207a2b_carl_argo',
                'file_name' => '65740d1207a2b_carl_argo.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 28750,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-09 06:45:52',
                'updated_at' => '2023-12-09 06:45:52',
            ),
            9 => 
            array (
                'id' => 11,
                'model_type' => 'App\\Models\\Review',
                'model_id' => 2,
                'uuid' => '902e6dce-bbd9-4aca-8997-04fa9b33d1af',
                'collection_name' => 'photo',
                'name' => '65740d0ee818b_5dfcfcaa0c319',
                'file_name' => '65740d0ee818b_5dfcfcaa0c319.png',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 107200,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 2,
                'created_at' => '2023-12-09 06:45:52',
                'updated_at' => '2023-12-09 06:45:52',
            ),
            10 => 
            array (
                'id' => 12,
                'model_type' => 'App\\Models\\Slider',
                'model_id' => 1,
                'uuid' => '3d77568f-18a0-453e-905f-71eeac5f9020',
                'collection_name' => 'image',
                'name' => '657786e9c3d7a_main-back',
                'file_name' => '657786e9c3d7a_main-back.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 274820,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-11 22:02:21',
                'updated_at' => '2023-12-11 22:02:21',
            ),
            11 => 
            array (
                'id' => 13,
                'model_type' => 'App\\Models\\Slider',
                'model_id' => 2,
                'uuid' => '7d6fe777-2013-48d1-827a-9315b489d9ce',
                'collection_name' => 'image',
                'name' => '6577a4c5ed64c_main-front',
                'file_name' => '6577a4c5ed64c_main-front.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 311192,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-12 00:10:05',
                'updated_at' => '2023-12-12 00:10:05',
            ),
            12 => 
            array (
                'id' => 14,
                'model_type' => 'App\\Models\\Slider',
                'model_id' => 3,
                'uuid' => '7466248d-91cf-433c-ad35-6bfba91ec71d',
                'collection_name' => 'image',
                'name' => '6577bbc565179_blog-windshield',
                'file_name' => '6577bbc565179_blog-windshield.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 143678,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-12 01:47:53',
                'updated_at' => '2023-12-12 01:47:54',
            ),
            13 => 
            array (
                'id' => 15,
                'model_type' => 'App\\Models\\Slider',
                'model_id' => 4,
                'uuid' => 'e3ad3b3f-f4f3-4d2f-91c0-b4e6c841bc90',
                'collection_name' => 'image',
                'name' => '6577bd3b0b5af_windshield-doors',
                'file_name' => '6577bd3b0b5af_windshield-doors.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 201401,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-12 01:54:45',
                'updated_at' => '2023-12-12 01:54:46',
            ),
            14 => 
            array (
                'id' => 16,
                'model_type' => 'App\\Models\\Build',
                'model_id' => 4,
                'uuid' => 'e9231453-b073-43ea-92a6-9a6dc2bd0ee6',
                'collection_name' => 'photo',
                'name' => '657b717a4b57b_frontside',
                'file_name' => '657b717a4b57b_frontside.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 142168,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-14 21:20:35',
                'updated_at' => '2023-12-14 21:20:35',
            ),
            15 => 
            array (
                'id' => 17,
                'model_type' => 'App\\Models\\Build',
                'model_id' => 4,
                'uuid' => '1b68f7cb-31a1-4fd6-aa84-e2a554ec5b4d',
                'collection_name' => 'additional_photos',
                'name' => '657b717fa8f30_main-front',
                'file_name' => '657b717fa8f30_main-front.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 112609,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 2,
                'created_at' => '2023-12-14 21:20:35',
                'updated_at' => '2023-12-14 21:20:35',
            ),
            16 => 
            array (
                'id' => 18,
                'model_type' => 'App\\Models\\Build',
                'model_id' => 4,
                'uuid' => 'a360bea8-aa4d-4747-8011-d29e1f9797f3',
                'collection_name' => 'additional_photos',
                'name' => '657b7181ed9cb_main-back',
                'file_name' => '657b7181ed9cb_main-back.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 137290,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 3,
                'created_at' => '2023-12-14 21:20:35',
                'updated_at' => '2023-12-14 21:20:35',
            ),
            17 => 
            array (
                'id' => 19,
                'model_type' => 'App\\Models\\Build',
                'model_id' => 3,
                'uuid' => '75508a3c-e371-4f00-b829-a2a87a70b806',
                'collection_name' => 'photo',
                'name' => '657b71b28cbe8_5aca5b5115940',
                'file_name' => '657b71b28cbe8_5aca5b5115940.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 158208,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-14 21:21:18',
                'updated_at' => '2023-12-14 21:21:18',
            ),
            18 => 
            array (
                'id' => 20,
                'model_type' => 'App\\Models\\Build',
                'model_id' => 3,
                'uuid' => 'bf597214-23df-4900-92d8-a1c563bffab6',
                'collection_name' => 'additional_photos',
                'name' => '657b71c5d54a8_5aca583a4025d',
                'file_name' => '657b71c5d54a8_5aca583a4025d.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 125282,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 2,
                'created_at' => '2023-12-14 21:21:18',
                'updated_at' => '2023-12-14 21:21:18',
            ),
            19 => 
            array (
                'id' => 21,
                'model_type' => 'App\\Models\\Build',
                'model_id' => 3,
                'uuid' => 'd28f75e7-b2d0-492c-bff6-b330f67fad66',
                'collection_name' => 'additional_photos',
                'name' => '657b71c5d572d_5aca584bc7945',
                'file_name' => '657b71c5d572d_5aca584bc7945.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 126734,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 3,
                'created_at' => '2023-12-14 21:21:18',
                'updated_at' => '2023-12-14 21:21:18',
            ),
            20 => 
            array (
                'id' => 22,
                'model_type' => 'App\\Models\\Build',
                'model_id' => 3,
                'uuid' => 'd040f2ec-d894-41ed-acc8-ded1842947ea',
                'collection_name' => 'additional_photos',
                'name' => '657b71c61b652_5aca585a20068',
                'file_name' => '657b71c61b652_5aca585a20068.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 124551,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 4,
                'created_at' => '2023-12-14 21:21:18',
                'updated_at' => '2023-12-14 21:21:18',
            ),
            21 => 
            array (
                'id' => 23,
                'model_type' => 'App\\Models\\Build',
                'model_id' => 2,
                'uuid' => '3a2b9c68-17eb-47aa-bc83-d42524538355',
                'collection_name' => 'photo',
                'name' => '657b71fabcab7_5dfcdeb506e8b',
                'file_name' => '657b71fabcab7_5dfcdeb506e8b.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 185505,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-14 21:22:51',
                'updated_at' => '2023-12-14 21:22:51',
            ),
            22 => 
            array (
                'id' => 24,
                'model_type' => 'App\\Models\\Build',
                'model_id' => 2,
                'uuid' => '89bdbf90-1371-4279-99ba-2a6ee03a4105',
                'collection_name' => 'additional_photos',
                'name' => '657b72264ca30_5dfcdf9ce26ce',
                'file_name' => '657b72264ca30_5dfcdf9ce26ce.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 193961,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 2,
                'created_at' => '2023-12-14 21:22:51',
                'updated_at' => '2023-12-14 21:22:51',
            ),
            23 => 
            array (
                'id' => 25,
                'model_type' => 'App\\Models\\Build',
                'model_id' => 2,
                'uuid' => 'f4631fbd-07a7-4e18-9a18-684c78498d68',
                'collection_name' => 'additional_photos',
                'name' => '657b72264e64e_5dfcdf4474e28',
                'file_name' => '657b72264e64e_5dfcdf4474e28.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 259436,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 3,
                'created_at' => '2023-12-14 21:22:51',
                'updated_at' => '2023-12-14 21:22:51',
            ),
            24 => 
            array (
                'id' => 26,
                'model_type' => 'App\\Models\\Build',
                'model_id' => 2,
                'uuid' => 'f7cfaf39-0ce8-4f52-8ef5-00ae08a56587',
                'collection_name' => 'additional_photos',
                'name' => '657b722687848_5dfcdfcbc4714',
                'file_name' => '657b722687848_5dfcdfcbc4714.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 227170,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 4,
                'created_at' => '2023-12-14 21:22:51',
                'updated_at' => '2023-12-14 21:22:52',
            ),
            25 => 
            array (
                'id' => 27,
                'model_type' => 'App\\Models\\Build',
                'model_id' => 2,
                'uuid' => '29a7d0ba-2141-49ff-9937-82cef1c5a5c8',
                'collection_name' => 'additional_photos',
                'name' => '657b72268a50a_5dfcdfeda447d',
                'file_name' => '657b72268a50a_5dfcdfeda447d.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 210161,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 5,
                'created_at' => '2023-12-14 21:22:52',
                'updated_at' => '2023-12-14 21:22:52',
            ),
            26 => 
            array (
                'id' => 28,
                'model_type' => 'App\\Models\\Post',
                'model_id' => 10,
                'uuid' => '722f4fa8-731b-45d0-9635-b2faad88f334',
                'collection_name' => 'featured_image',
                'name' => '657ba4c08625a_5dfcdea0a6245',
                'file_name' => '657ba4c08625a_5dfcdea0a6245.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 193711,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-15 00:58:43',
                'updated_at' => '2023-12-15 00:58:43',
            ),
            27 => 
            array (
                'id' => 29,
                'model_type' => 'App\\Models\\Post',
                'model_id' => 1,
                'uuid' => '5bdb900d-feaa-48f3-95b0-7b6ef3928398',
                'collection_name' => 'featured_image',
                'name' => '657ba88fad8c4_5a64e1eb47933',
                'file_name' => '657ba88fad8c4_5a64e1eb47933.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 184291,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-15 01:14:58',
                'updated_at' => '2023-12-15 01:14:58',
            ),
            28 => 
            array (
                'id' => 30,
                'model_type' => 'App\\Models\\Post',
                'model_id' => 2,
                'uuid' => '6eceefec-045b-46ea-b8af-099b173254ad',
                'collection_name' => 'featured_image',
                'name' => '657ba8cf5caa1_5a66755ba1133',
                'file_name' => '657ba8cf5caa1_5a66755ba1133.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 135867,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-15 01:16:13',
                'updated_at' => '2023-12-15 01:16:13',
            ),
            29 => 
            array (
                'id' => 31,
                'model_type' => 'App\\Models\\Post',
                'model_id' => 3,
                'uuid' => '4d1c1fd6-9256-434e-842e-291c050f54d9',
                'collection_name' => 'featured_image',
                'name' => '657ba9484ddb0_5aca5875bb377',
                'file_name' => '657ba9484ddb0_5aca5875bb377.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 152017,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-15 01:18:09',
                'updated_at' => '2023-12-15 01:18:09',
            ),
            30 => 
            array (
                'id' => 32,
                'model_type' => 'App\\Models\\Post',
                'model_id' => 4,
                'uuid' => '2be67cfb-8415-4118-a856-4ed479875d0e',
                'collection_name' => 'featured_image',
                'name' => '657baba68790d_5b0ffbf335efd',
                'file_name' => '657baba68790d_5b0ffbf335efd.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 83007,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-15 01:28:26',
                'updated_at' => '2023-12-15 01:28:26',
            ),
            31 => 
            array (
                'id' => 33,
                'model_type' => 'App\\Models\\Post',
                'model_id' => 5,
                'uuid' => '7691fc0f-3312-4322-82d0-b7662354f6d2',
                'collection_name' => 'featured_image',
                'name' => '657bad2b260c3_5b0ac9bd27d12',
                'file_name' => '657bad2b260c3_5b0ac9bd27d12.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 177117,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true,"preview":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-12-15 01:35:43',
                'updated_at' => '2023-12-15 01:35:43',
            ),
        ));
        
        
    }
}