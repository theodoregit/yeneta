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
            $table->float('amount');
            $table->float('penality');
            $table->float('total');
            $table->timestamps();
            $table->float('11');
            $table->float('21');
            $table->float('31');
            $table->float('41');
            $table->float('51');
            $table->float('61');
            $table->float('71');
            $table->float('81');
            $table->float('91');
            $table->float('101');
            $table->float('111');
            $table->float('121');
            $table->float('12');
            $table->float('22');
            $table->float('32');
            $table->float('42');
            $table->float('52');
            $table->float('62');
            $table->float('72');
            $table->float('82');
            $table->float('92');
            $table->float('102');
            $table->float('112');
            $table->float('122');
            $table->float('13');
            $table->float('23');
            $table->float('33');
            $table->float('43');
            $table->float('53');
            $table->float('63');
            $table->float('73');
            $table->float('83');
            $table->float('93');
            $table->float('103');
            $table->float('113');
            $table->float('123');
            $table->float('14');
            $table->float('24');
            $table->float('34');
            $table->float('44');
            $table->float('54');
            $table->float('64');
            $table->float('74');
            $table->float('84');
            $table->float('94');
            $table->float('104');
            $table->float('114');
            $table->float('124');
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
