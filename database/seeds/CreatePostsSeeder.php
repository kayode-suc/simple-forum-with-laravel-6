<?php

use Illuminate\Database\Seeder;

class CreatePostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\post::class, 15)->create();
    }
}
