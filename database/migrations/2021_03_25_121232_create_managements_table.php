<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dept_name');
            $table->varchar('CourseCode');
            $table->string('CourseTitle');
            $table->integer('ECTS');
            $table->integer('CrHrs');
            $table->integer('LecHrs');
            $table->integer('LabHrs');
            $table->integer('TutHrs');
            $table->string('prerequiest');
            $table->string('corequiest');
            $table->string('InstructorName');
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
        Schema::dropIfExists('managements');
    }
}
