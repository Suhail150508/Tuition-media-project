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
        Schema::create('manual_application_tutors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tuition_id');
            $table->string('name');
            $table->string('gender');
            $table->string('institution');
            $table->string('subject');
            $table->string('district');
            $table->string('location');
            $table->integer('mobile');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manual_application_tutors');
    }
};
