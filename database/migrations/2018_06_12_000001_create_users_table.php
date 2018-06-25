<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->string('nombre',20);
            $table->string('apellidos', 40);
            $table->string('telefono', 10);
            $table->text('direccion');
            $table->string('email',100)->unique();
            $table->string('password');
            $table->integer('tipo_usuario_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('tipo_usuario_id')->references('id')->on('tipo_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
