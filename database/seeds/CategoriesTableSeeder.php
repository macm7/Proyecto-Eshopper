<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category' => 'Chaquetas',
                'slug' => 'chaquetas',
                'created_at' => '2018-01-29 14:33:11',
                'updated_at' => '2018-01-29 14:33:11',
            ),
            1 => 
            array (
                'id' => 2,
                'category' => 'Blusas',
                'slug' => 'blusas',
                'created_at' => '2018-01-29 14:33:19',
                'updated_at' => '2018-01-29 14:33:19',
            ),
            2 => 
            array (
                'id' => 3,
                'category' => 'Franelas',
                'slug' => 'franelas',
                'created_at' => '2018-01-29 14:33:27',
                'updated_at' => '2018-01-29 14:33:27',
            ),
            3 => 
            array (
                'id' => 4,
                'category' => 'Pantalones',
                'slug' => 'pantalones',
                'created_at' => '2018-01-29 14:33:38',
                'updated_at' => '2018-01-29 14:33:38',
            ),
            4 => 
            array (
                'id' => 5,
                'category' => 'Vestidos',
                'slug' => 'vestidos',
                'created_at' => '2018-01-29 14:33:53',
                'updated_at' => '2018-01-29 14:33:53',
            ),
            5 => 
            array (
                'id' => 7,
                'category' => 'Shorts',
                'slug' => 'shorts',
                'created_at' => '2018-01-29 18:32:16',
                'updated_at' => '2018-01-29 18:32:16',
            ),
            6 => 
            array (
                'id' => 8,
                'category' => 'Zapatos',
                'slug' => 'zapatos',
                'created_at' => '2018-01-29 18:32:24',
                'updated_at' => '2018-01-29 18:32:24',
            ),
        ));
        
        
    }
}