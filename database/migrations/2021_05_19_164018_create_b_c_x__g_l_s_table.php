<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBCXGLSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_c_x__g_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('stan');
            $table->dateTime('Date')->unique();
            $table->string('Terminal_id')->nullable();
            $table->string('Account_no')->nullable();
            $table->Integer('Transaction_no')->nullable();
            $table->integer('sheet_no')->nullable();
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
        Schema::dropIfExists('b_c_x__g_l_s');
    }
}
