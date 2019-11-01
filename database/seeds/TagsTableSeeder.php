<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tags = ['js', 'html', 'php', 'new technology', 'IT'];
      foreach ($tags as $tag) {
        Tag::create(['title' => $tag ]);
      }
    }
}
