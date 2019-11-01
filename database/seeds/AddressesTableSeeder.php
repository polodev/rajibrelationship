<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Address;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $addresses = [
        [
          'village' => 'fatepur', 
          'police_station' => 'Kachua',
          'user_id' => 1,
        ],
        [
          'village' => 'Niz Meher', 
          'police_station' => 'Shahrasti',
          'user_id' => 2,
        ],
      ];
      foreach ($addresses as $address) {
        Address::create($address);
      }
    }
}
