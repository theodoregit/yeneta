<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('idnumber');
            $table->string('dept_name');
            $table->string('year');
            $table->string('semester');
            $table->float('amount');
            $table->float('penality');
            $table->float('total');
            $table->timestamps();
            $table->float('11')->default(0.00);
            $table->float('21')->default(0.00);
            $table->float('31')->default(0.00);
            $table->float('41')->default(0.00);
            $table->float('51')->default(0.00);
            $table->float('61')->default(0.00);
            $table->float('71')->default(0.00);
            $table->float('81')->default(0.00);
            $table->float('91')->default(0.00);
            $table->float('101')->default(0.00);
            $table->float('111')->default(0.00);
            $table->float('121')->default(0.00);
            $table->float('12')->default(0.00);
            $table->float('22')->default(0.00);
            $table->float('32')->default(0.00);
            $table->float('42')->default(0.00);
            $table->float('52')->default(0.00);
            $table->float('62')->default(0.00);
            $table->float('72')->default(0.00);
            $table->float('82')->default(0.00);
            $table->float('92')->default(0.00);
            $table->float('102')->default(0.00);
            $table->float('112')->default(0.00);
            $table->float('122')->default(0.00);
            $table->float('13')->default(0.00);
            $table->float('23')->default(0.00);
            $table->float('33')->default(0.00);
            $table->float('43')->default(0.00);
            $table->float('53')->default(0.00);
            $table->float('63')->default(0.00);
            $table->float('73')->default(0.00);
            $table->float('83')->default(0.00);
            $table->float('93')->default(0.00);
            $table->float('103')->default(0.00);
            $table->float('113')->default(0.00);
            $table->float('123')->default(0.00);
            $table->float('14')->default(0.00);
            $table->float('24')->default(0.00);
            $table->float('34')->default(0.00);
            $table->float('44')->default(0.00);
            $table->float('54')->default(0.00);
            $table->float('64')->default(0.00);
            $table->float('74')->default(0.00);
            $table->float('84')->default(0.00);
            $table->float('94')->default(0.00);
            $table->float('104')->default(0.00);
            $table->float('114')->default(0.00);
            $table->float('124')->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
