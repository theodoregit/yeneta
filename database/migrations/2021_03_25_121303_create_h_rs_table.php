<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHRsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_rs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('EmployeeNAME');
            $table->string('adress');
            $table->integer('mobile');
            $table->string('qulification');
            $table->string('expriance');
            $table->float('salary');
            $table->string('postion');
            $table->string('gender'); 
            $table->string('email');
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
        Schema::dropIfExists('h_rs');
    }
}
