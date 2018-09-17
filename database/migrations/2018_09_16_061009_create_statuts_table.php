<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('statut');
            $table->string('color');
            $table->timestamps();
        });
        /**
         * population statuts
         */
        DB::table('statuts')->insert([
            ['statut' => 'Disponible', 'color' => '#02bf2b'],
            ['statut' => 'Indisponible', 'color' => '#767676'],
            ['statut' => 'SignatureCommande', 'color' => '#4184a5'],
            ['statut' => 'Alert', 'color' => '#ff0000'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuts');
    }
}
