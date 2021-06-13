<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBCXESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_c_x_e_s', function (Blueprint $table) {
            $table->id();
            $table->string('stan');
            $table->Integer('Card_no')->nullable();
            $table->string('Terminal_id');
            $table->Integer('Amount')->nullable();
            $table->float('Charge')->nullable();
            $table->string('Account_no')->nullable();
            $table->string('rrn')->nullable();
            $table->string('status')->nullable();
            $table->integer('sheet_no')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('b_c_x_e_s');
    }
}

