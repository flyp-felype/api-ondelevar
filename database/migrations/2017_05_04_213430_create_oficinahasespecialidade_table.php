<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOficinahasespecialidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficina_especialidades', function (Blueprint $table) {
            $table->integer('oficina_id')->unsigned();
            $table->integer('especialidades_id')->unsigned();
            $table->foreign('oficina_id')->references('id')->on('oficina');
            $table->foreign('especialidades_id')->references('idespecialidades')->on('especialidades');
        });
        //
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
