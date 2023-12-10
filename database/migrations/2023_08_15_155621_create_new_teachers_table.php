<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('user')->nullable;
            $table->string('password');
            $table->string('mobile');
            $table->string('gender');
            $table->string('experience');
            $table->string('image');
            $table->string('institution');
            $table->string('subject');
            $table->string('district');
            $table->string('present_address');
            $table->string('schedule');
            $table->string('student_level');
            $table->string('prefered_subject');
            $table->integer('salary');
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
        Schema::dropIfExists('new_teachers');
    }
};
