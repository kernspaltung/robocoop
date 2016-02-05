<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoopsTable extends Migration
{
    public function up()
    {
        Schema::create('coops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('administrators');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('coops');
    }
}
