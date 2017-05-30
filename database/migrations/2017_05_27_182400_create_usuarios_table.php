<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('usuario', function(Blueprint $table){
            $table->increments('idusuario');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('fotoperfil')->nullable();
            $table->string('facebook')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf',2)->nullable();
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
        //
    }
}
