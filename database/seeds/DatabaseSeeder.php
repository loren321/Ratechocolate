<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ChocolateTableSeeder::class);
        $this->call(ChocoToIngredientTableSeeder::class);
        $this->call(IngredientTableSeeder::class);
        $this->call(ManufacturerTableSeeder::class);
        $this->call(NutritionTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(TypeTableSeeder::class);
    }
}
