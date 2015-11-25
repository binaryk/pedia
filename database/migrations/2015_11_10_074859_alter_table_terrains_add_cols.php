<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableTerrainsAddCols extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('terrains', function(Blueprint $t){
            $t->integer('id_locatie');
            $t->text('suprafata');
            $t->integer('id_tip_teren');
            $t->text('deschidere');
            $t->integer('id_tip_caracteristici');
            $t->text('photo');
            $t->text('pret',20);
            $t->text('telefon', 20);
            $t->text('proprietar',30);
            $t->text('negociabil', 5);
            $t->text('detalii');
            $t->tinyinteger('front_stradal')->nullable();
            $t->integer('nr_fronturi');
            $t->integer('latime_drum_acces');
            $t->integer('constructie_teren');
            $t->integer('detalii_2');
            $t->tinyInteger('aprobat')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('terrains', function(Blueprint $t){
            $t->dropColumn([
                'id_locatie',
                'suprafata',
                'id_tip_teren',
                'deschidere',
                'id_tip_caracteristici',
                'photo',
                'pret',
                'telefon',
                'proprietar',
                'negociabil',
                'detalii',
                'front_stradal',
                'nr_fronturi',
                'latime_drum_acces',
                'constructie_teren',
                'detalii_2',
                'aprobat',
            ]);
        });
    }
}
