<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerrainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terrains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('user_id');
            $table->text('description');
            $table->text('history');
            $table->timestamps();
            $table->string('type');
            $table->text('geometry');
            $table->float('radius');
            $table->text('style');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('terrains');
    }
}
