<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTerrainCoords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terrain_coords', function(Blueprint $t){
            $t->increments('id');
            $t->integer('terrain_id');
            $t->text('lat', 20);
            $t->text('long', 20);
            $t->softdeletes();
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('terrain_coords');
    }
}
