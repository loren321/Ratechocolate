<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Ingredient;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 30) as $index)
        {
            $ingredient = new Ingredient;

            $ingredient->name = $faker->word;

            $ingredient->save();
        }
    }
}
