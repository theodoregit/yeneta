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
            $table->varchar('Stud_ID');
            $table->varchar('full_name');
            $table->string('gender');
            $table->varchar('dept_id');
            $table->foreign('dept_id')->references('id')->on('department');
            $table->varchar('section');
            $table->float('SGPA');
            $table->float('CGPA');
            $table->integer('year');
            $table->string('semester');
            $table->boolean('IsPaid');
            $table->boolean('PaidAt');
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
        Schema::dropIfExists('students');
    }
}
