<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
      $faker = Faker::create();
      foreach (range(1, 30) as $index) {
          $user = new User;

          $user->name = $faker->name;
          $user->email = $faker->email;
          $user->password = bcrypt('password');

          $user->save();
      }
    }
}
