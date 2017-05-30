<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('especialidades', function (Blueprint $table) {
            $table->increments('idespecialidades');
            $table->string('descricao');
            $table->integer('idtipo_tipo')->unsigned();
             $table->foreign('idtipo_tipo')->references('idtipos')->on('tipos');
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
        //
    }
}
