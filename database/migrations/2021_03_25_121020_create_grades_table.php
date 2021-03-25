<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('stud_id');
            $table->foreign('stud_id')->references('stud_id')->on('students');
            $table->varchar('CourseCode');
            //$table->foreign('CourseCode')->references('dept_name')->on('departments');
            $table->float('assessment');
            $table->float('total');
            $table->string('GradeType');
            $table->boolean('IsPromoted');
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
        Schema::dropIfExists('grades');
    }
}
