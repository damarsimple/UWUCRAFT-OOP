<?php

use Illuminate\Database\Seeder;
use App\Post;

class Postseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        factory(Post::class, 40)->create();

    }
}
