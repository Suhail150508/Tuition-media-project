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
        Schema::create('new_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('user')->nullable;
            $table->string('class');
            $table->string('subject');
            $table->string('medium');
            $table->string('gender');
            $table->string('schedule');
            $table->string('days');
            $table->integer('student_number');
            $table->integer('salary');
            $table->string('district');
            $table->string('local_address');
            $table->integer('mobile');
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
        Schema::dropIfExists('new_students');
    }
};
