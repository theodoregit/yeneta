<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id')->unique();
            $table->string('full_name');
            $table->string('gender');
            $table->string('dept_id');
            $table->foreign('dept_id')->references('id')->on('department');
            $table->string('section');
            $table->float('sgpa');
            $table->float('cgpa');
            $table->integer('year');
            $table->string('semester');
            $table->boolean('is_paid');
            $table->boolean('pait_at');
            $table->boolean('is_promoted');
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
        Schema::dropIfExists('students');
    }
}
