<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'location' => '1',
                'sub_title' => 'CUSTOM WORK',
                'main_title' => 'NEWEST SPECIALS AVAILABLE NOW',
                'sub_title_2' => 'Check Them Out!',
                'slider_description' => NULL,
                'text_heading' => NULL,
                'heading_1' => NULL,
                'heading_2' => NULL,
                'heading_3' => NULL,
                'text' => NULL,
                'main_button_text' => NULL,
                'main_button_link' => NULL,
                'main_button_tab_index' => 1,
                'second_button_text' => NULL,
                'second_button_link' => NULL,
                'second_button_tab_index' => 2,
                'created_at' => '2023-12-06 22:45:04',
                'updated_at' => '2023-12-06 22:45:04',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}