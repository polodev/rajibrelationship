<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();
      foreach (range(1, 20) as $i) {
        Post::create([
          'title' => $faker->paragraph,
          'content' => $faker->paragraph,
          'user_id' => rand(1, 3),
        ]);
      }
    }
}
