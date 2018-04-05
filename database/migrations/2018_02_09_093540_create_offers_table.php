<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_time');
            $table->date('end_time');
            $table->string('descreption');
            $table->integer('number_of_hours');
            $table->double('hour_cost');
            $table->integer('freelancer_id')->unsigned();

            $table->integer('state')->default(0);
            $table->integer('timeNeeded');
            $table->integer('task_id');
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
        Schema::dropIfExists('offers');
    }
}
