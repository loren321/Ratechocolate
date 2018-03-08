<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Nutrition;

class NutritionTableSeeder extends Seeder
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
            $nutrition = new Nutrition;

            $nutrition->carbs = $faker->numberBetween($min = 1, $max = 20);
            $nutrition->fats = $faker->numberBetween($min = 1, $max = 20);
            $nutrition->protein = $faker->numberBetween($min = 1, $max = 20);
            $kcals = 9 * $nutrition->fats + 4 * $nutrition->carbs + 4 * $nutrition->protein;
            $nutrition->calories = $kcals;

            $nutrition->save();
        }
    }
}
