<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Miguel Clemente',
                'email' => 'admin@control.com',
                'comment' => 'Esta pagina esta brutal!',
                'blog_id' => 7,
                'created_at' => '2018-01-29 20:38:51',
                'updated_at' => '2018-01-29 20:38:51',
            ),
        ));
        
        
    }
}