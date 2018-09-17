<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('firstname');
            $table->integer('statut_id')->unsigned();
            $table->timestamps();
            $table->foreign('statut_id')->references('id')->on('statuts');
            
        });
        /**
         * Population de la table DEV
         * 
         */
        DB::table('agents')->insert([
            ['firstname' => 'Hicham', 'name' => 'Asbagui','statut_id'=>1],
            ['firstname' => 'Jean', 'name' => 'Legran','statut_id'=>2],
            ['firstname' => 'Gabriel', 'name' => 'Evecq','statut_id'=>3],
            ['firstname' => 'Mohamed', 'name' => 'Benzizou','statut_id'=>4],
            
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
