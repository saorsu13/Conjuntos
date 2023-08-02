<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('usuario_id');
            $table->unsignedInteger('localizacion_id')->index('usuarios_localizacion_id_foreign');
            $table->string('activo');
            $table->string('nombre');
            $table->string('email');
            $table->string('password', 64);
            $table->string('rol');
            $table->string('cargo');
            $table->string('localizacion_usuario');
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
        Schema::dropIfExists('usuarios');
    }
};
