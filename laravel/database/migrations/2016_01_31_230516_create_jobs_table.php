<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
 public function up()
 {
    Schema::create('jobs', function (Blueprint $table) {
        $table->string('name')->unique();
        $table->string( 'description' );
        $table->text( 'deliverables' );
        $table->integer( 'status' );
        $table->text( 'administrators' );
        $table->text( 'members' );
        $table->text( 'tasks' );
        $table->text( 'sessions' );
        $table->text( 'materials' );
        $table->text( 'payments' );
        $table->rememberToken();
        $table->timestamps();
    });
}

public function down()
{
    Schema::drop('jobs');
}

}