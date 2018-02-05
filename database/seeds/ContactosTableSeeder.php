<?php

use Illuminate\Database\Seeder;

class ContactosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contactos')->delete();
        
        \DB::table('contactos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '4 Geeks Academy',
                'address' => 'El Nacional, Los Cortijos',
                'state' => 'Miranda',
                'phone' => '0212-1234567',
                'mail' => 'info@4geeksacademy.com',
                'facebook' => '4geeksacademy',
                'twitter' => '4GeeksAcademy',
                'google' => '4geeksacademy',
                'youtube' => 'UC1ZyAx5eyV9gTFWpHPs9-GA',
                'created_at' => '2018-01-29 14:54:04',
                'updated_at' => '2018-01-29 15:11:38',
            ),
        ));
        
        
    }
}