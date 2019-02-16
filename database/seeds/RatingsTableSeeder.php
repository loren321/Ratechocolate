<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Rating;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 90) as $index)
        {
            $rating = new Rating;
            $rating->chocolate_id = $faker->numberBetween($min = 1, $max = 30);
            $rating->stars = $faker->numberBetween($min = 1, $max = 5);
            $rating->review_text = $faker->text($maxNbChars = 200);
            $rating->author_id = $faker->numberBetween($min = 1, $max = 10);

            $rating->save();
        }
    }
}
