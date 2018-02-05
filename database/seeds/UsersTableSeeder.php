<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Miguel Clemente',
            'email' => 'admin@control.com',
            'password' => bcrypt('123456'),
            'img' => '',
            'bio' => ''
        ]);

        $user->assignRole('admin');
        
        $user = User::create([
            'name' => 'Usuario',
            'email' => 'user@control.com',
            'password' => bcrypt('123456'),
            'img' => '',
            'bio' => ''
        ]);

        $user->assignRole('usuario');
    }
}
