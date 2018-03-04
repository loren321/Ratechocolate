<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChocolatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chocolates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('cocoa_percentage');
            $table->integer('type_id');
            $table->string('country');
            $table->integer('nutrition_id');
            $table->integer('manufacturer_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chocolates');
    }
}
