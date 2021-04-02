<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputerSciencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer__sciences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dept_name');
            $table->string('course_code');
            $table->string('course_title');
            $table->integer('ects');
            $table->integer('credit_hrs');
            $table->integer('lecture_hrs');
            $table->integer('lab_hrs');
            $table->integer('tutor_hrs');
            $table->string('prerequisite')->default('none');
            $table->string('corequisite')->default('none');
            $table->string('instructor_name')->default('none');
            $table->integer('year');
            $table->string('semester');
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
        Schema::dropIfExists('computer__sciences');
    }
}
