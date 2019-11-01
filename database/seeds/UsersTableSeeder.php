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
      $users = [
        [
          'name' => 'shibu',
          'email' => 'shibu@gmail.com',
        ],
        [
          'name' => 'rajib',
          'email' => 'rajib@gmail.com',
        ],
        [
          'name' => 'dider',
          'email' => 'dider@gmail.com',
        ],
      ];

      foreach ($users as $user) {
        User::create([
          'name' => $user['name'],
          'email' => $user['email'],
          'password' => bcrypt('secret'),
        ]);
      }
      // $faker = \Faker\Factory::create();
      // foreach (range(1, 10) as $i) {
      //   User::create([
      //     'name' => $faker->name,
      //     'email' => $faker->email,
      //     'password' => bcrypt('secret'),
      //   ]);
      // }


    }
}
