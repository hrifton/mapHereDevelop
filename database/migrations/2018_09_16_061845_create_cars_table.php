<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plaque')->unique;
            $table->integer('kg_max');
            $table->timestamps();
        });


          /**
         * Population de la table DEV
         * 
         */
        DB::table('cars')->insert([
            ['plaque' => 'A-123-abf', 'kg_max' =>200],
            ['plaque' => 'A-123-Bed', 'kg_max' =>250],
            ['plaque' => '1-526-ffr', 'kg_max' =>300],
            ['plaque' => '1-eez-856', 'kg_max' =>200],
            ['plaque' => '1-ert-852', 'kg_max' =>250],
            ['plaque' => '1-aer-963', 'kg_max' =>250],
            ['plaque' => '1-wfs-456', 'kg_max' =>250],
            
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
