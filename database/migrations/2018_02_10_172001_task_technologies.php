<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaskTechnologies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_technoloies' , function (Blueprint $table){
           $table->integer('task_id')->unsigned();
           $table->integer('skill_id')->unsigned();
            $table->foreign('task_id')->references('id')->on('taskS.blade.php');
            $table->foreign('skill_id')->references('id')->on('skills');


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
