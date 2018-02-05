<?php

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
                'id' => 6,
                'name' => 'cover-7',
                'img_name' => 'cover-7.jpg',
                'status' => '1',
                'created_at' => '2018-01-29 20:30:18',
                'updated_at' => '2018-01-29 20:30:18',
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'cover-8',
                'img_name' => 'cover-8.jpg',
                'status' => '1',
                'created_at' => '2018-01-29 20:30:42',
                'updated_at' => '2018-01-29 20:30:42',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'cover-9',
                'img_name' => 'cover-9.jpg',
                'status' => '1',
                'created_at' => '2018-01-29 20:30:59',
                'updated_at' => '2018-01-29 20:30:59',
            ),
        ));
        
        
    }
}