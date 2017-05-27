<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('foto', function (Blueprint $table) {
                $table->increments('idfotto');
                $table->string('nome');
                $table->string('pasta');
                $table->string('status');
                $table->integer('oficina_id')->unsigned();
                $table->foreign('oficina_id')->references('id')->on('oficina');
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
