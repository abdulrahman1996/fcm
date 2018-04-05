<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taskS.blade.php', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->date('date');
            $table->integer('employer_id')->unsigned();
            $table->integer('state');
            $table->string('descreption');

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
        Schema::dropIfExists('taskS.blade.php');
    }
}
