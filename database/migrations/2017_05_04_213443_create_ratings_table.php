<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
           Schema::create('ratings', function (Blueprint $table) {
            $table->increments('idratings');
            $table->integer('classificacao');
            $table->integer('oficina_id')->unsigned();
            $table->integer('usuarioid')->unsigned();
             $table->foreign('oficina_id')->references('id')->on('oficina');
             $table->foreign('usuarioid')->references('id')->on('users');
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
