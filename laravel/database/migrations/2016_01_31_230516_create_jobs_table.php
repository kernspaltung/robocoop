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
        $table->json( 'deliverables' );
        $table->integer( 'status' );
        $table->json( 'administrators' );
        $table->json( 'members' );
        $table->json( 'tasks' );
        $table->json( 'sessions' );
        $table->json( 'materials' );
        $table->json( 'payments' );
        $table->rememberToken();
        $table->timestamps();
    });
}

public function down()
{
    Schema::drop('jobs');
}

}