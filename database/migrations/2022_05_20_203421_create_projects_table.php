<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->nullable();
            $table->string('tagline')->nullable();
            $table->string('githuburl')->nullable();
            $table->string('liveurl')->nullable();
            $table->boolean('show')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
