<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
           Schema::create('comentarios', function (Blueprint $table ){
                $table->increments('idcomentario');
                $table->string('comentario');
                $table->integer('idusario')->unsigned();
                $table->integer('oficinaid')->unsigned();
                $table->foreign('oficinaid')->references('id')->on('oficina');
                $table->foreign('idusario')->references('idusuario')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
