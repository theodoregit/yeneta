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
            $table->string('stud_id');
            $table->foreign('stud_id')->references('stud_id')->on('students');
            $table->string('course_code');
            //$table->foreign('CourseCode')->references('dept_name')->on('departments');
            $table->float('assessment')->default(0.0);
            $table->float('mid_exam')->default(0.0);
            $table->float('final_exam')->default(0.0);
            $table->float('total')->default(0.0);
            $table->string('grade_type')->default('NG');
            $table->boolean('is_promoted')->default(false);
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
