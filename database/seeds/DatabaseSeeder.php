<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory('App\Post',20)->create();
        factory('App\Category',20)->create();
        factory('App\Tag',20)->create();
        factory('App\post_tag',20)->create();
        factory('App\category_post',20)->create();
    }
}
