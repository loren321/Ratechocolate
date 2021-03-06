<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Manufacturer;

class ManufacturerTableSeeder extends Seeder
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
            $manufacturer = new Manufacturer;

            $manufacturer->name = $faker->company;

            $manufacturer->save();
        }
    }
}
