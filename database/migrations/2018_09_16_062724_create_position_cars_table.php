<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->unsigned();
            $table->double('lat')->nullable();
            $table->double('long')->nullable();
            $table->timestamps();
            $table->foreign('car_id')->references('id')->on('cars');
           
        });

          /**
         * population Position agents
         */
        DB::table('position_cars')->insert([
            ['car_id' => 1, 'lat' =>50.850346,'long'=>4.351721],
            ['car_id' => 1, 'lat' =>50.873935,'long'=>4.400942],
            ['car_id' => 1, 'lat' => 50.610824,'long'=>4.450246],
            ['car_id' => 1, 'lat' => 50.714691,'long'=>4.399122],
            ['car_id' => 1, 'lat' => 50.873035,'long'=>4.400042],
            ['car_id' => 1, 'lat' => 50.800346,'long'=>4.351621],
            ['car_id' => 1, 'lat' => 50.873965,'long'=>4.400992],
            ['car_id' => 1, 'lat' => 50.610924,'long'=>4.450346],
            ['car_id' => 1, 'lat' => 50.714681,'long'=>4.399101],

            ['car_id' => 2, 'lat' =>50.850346,'long'=>4.351721],
            ['car_id' => 2, 'lat' =>50.873935,'long'=>4.400942],
            ['car_id' => 2, 'lat' => 50.610824,'long'=>4.450246],
            ['car_id' => 2, 'lat' => 50.714691,'long'=>4.399122],
            ['car_id' => 2, 'lat' => 50.873035,'long'=>4.400042],
            ['car_id' => 2, 'lat' => 50.800346,'long'=>4.351621],
            ['car_id' => 2, 'lat' => 50.873965,'long'=>4.400992],
            ['car_id' => 2, 'lat' => 50.610924,'long'=>4.450346],
            ['car_id' => 2, 'lat' => 50.714681,'long'=>4.399101],
]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('position_cars');
    }
}
