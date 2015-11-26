<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCharacteristicsTerrain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristics_terrain', function(Blueprint $t){
            $t->integer('id_characteristics');
            $t->integer('id_terrain');
            $t->softdeletes();
            $t->timestamps();
        });

//        Schema::table('characteristics_terrain',function(Blueprint $t){
//            $t->foreign('id_characteritics')
//                ->references('id')->on('characteristics')
//                ->onDelete('restrict');
//            $t->foreign('id_terrain')
//                ->references('id')->on('terrains')
//                ->onDelete('restrict');;
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('characteristics_terrain',function(Blueprint $t){
//        $t->dropForeign('characteristics_terrain_id_characteritics_foreign');
//        $t->dropForeign('characteristics_terrain_id_terrain_foreign');
//        });
        Schema::drop('characteristics_terrain');
    }
}
