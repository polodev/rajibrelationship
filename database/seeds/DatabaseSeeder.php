<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TagsTableSeeder::class);

        $posts = Post::get();
        $tags = Tag::get();
        foreach ($posts as $post) {
            $tags = Tag::all()->random(3)->pluck('id');
            $post->tags()->attach( $tags );
        }
      
    }
}
