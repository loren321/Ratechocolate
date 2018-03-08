<?php

use Illuminate\Database\Seeder;

use App\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type0 = new Type;
        $type0->type = "Dark";
        $type0->save();

        $type1 = new Type;
        $type1->type = "Milk";
        $type1->save();

        $type2 = new Type;
        $type2->type = "White";
        $type2->save();
    }
}
