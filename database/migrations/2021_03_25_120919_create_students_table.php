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
            $table->string('idnumber')->unique();
            $table->string('fullname');
            $table->string('gender');
            $table->string('dept_name');
            $table->foreign('dept_name')->references('dept_name')->on('department');
            $table->string('section');
            $table->float('sgpa')->default(0.0);
            $table->float('cgpa')->default(0.0);
            $table->string('year');
            $table->string('semester');
            $table->boolean('is_paid')->default(0);
            $table->boolean('is_promoted')->default(0);
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
