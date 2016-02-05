<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id');
            $table->string('name');
            $table->string('description');
            $table->string('extra_info');
            $table->dateTime('date_expected');
            $table->dateTime('date_finished');
            $table->string('duration_expected');
            $table->string('duration_finished');
            $table->boolean('done');
            $table->integer('status');
            $table->text('asignees');
            $table->timestamps();
        });

        // Schema::table('tasks', function($table) {
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}
