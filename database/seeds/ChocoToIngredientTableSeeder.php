<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class ChocoToIngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 75) as $index)
        {
            DB::table('choco_to_ingredients')->insert([
                'chocolate_id' => $faker->numberBetween($min = 1, $max = 30),
                'ingredient_id' => $faker->numberBetween($min = 1, $max = 30)
            ]);
        }
    }
}
