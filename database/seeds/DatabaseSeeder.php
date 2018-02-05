<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(ContactosTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
    }
}
