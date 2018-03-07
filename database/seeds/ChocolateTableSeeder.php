<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

use App\Chocolate;

class ChocolateTableSeeder extends Seeder
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
            $chocolate = new Chocolate;

            $chocolate->name = $faker->company;
            $chocolate->cocoa_percentage = $faker->numberBetween($min = 1, $max = 100);
            $chocolate->type_id = $faker->numberBetween($min = 0, $max = 2);
            $chocolate->country = $faker->country;
            $chocolate->nutrition_id = $faker->numberBetween($min = 0, $max = 30);
            $chocolate->manufacturer_id = $faker->numberBetween($min = 0, $max = 10);

            $chocolate->save();

            /*
            DB::table('chocolates')->insert([
                'name' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'cocoa_percentage' => $faker->numberBetween($min = 1, $max = 100),
                'type_id' => $faker->numberBetween($min = 0, $max = 2),
                'country' => $faker->country,
                'nutrition_id' => $faker->numberBetween($min = 0, $max = 30),
                'manufacturer_id' => $faker->numberBetween($min = 0, $max = 10)
            ]);
            */
        }
    }
}
