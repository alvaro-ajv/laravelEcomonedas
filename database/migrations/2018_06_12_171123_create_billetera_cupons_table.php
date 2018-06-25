<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilleteraCuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billetera_cupons', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->integer('billetera_id')->unsigned();
            $table->integer('cupon_id')->unsigned();
            $table->primary(['billetera_id','cupon_id']);
            $table->timestamps();
            $table->foreign('billetera_id')->references('id')->on('billeteras');
            $table->foreign('cupon_id')->references('id')->on('cupons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      
        Schema::dropIfExists('billetera_cupons');

    }
}
