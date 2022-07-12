<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('agency',50);
            $table->string('departure_station',50);
            $table->string('arrival_station',50);
            $table->dateTime('arrival_time', 0);
            $table->dateTime('departure_time', 0);
            $table->string('code_train',10);
            $table->unsignedTinyInteger('carriages');
            $table->boolean('is_time')->default(true);
            $table->boolean('is_delate')->default(false);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
