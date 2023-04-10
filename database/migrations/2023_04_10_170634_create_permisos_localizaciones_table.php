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
        Schema::create('permisos_localizaciones', function (Blueprint $table) {
            $table->increments('permisos_localizaciones_id');
            $table->unsignedInteger('usuario_id')->index('permisos_localizaciones_usuario_id_foreign');
            $table->unsignedInteger('localizacion_id')->index('permisos_localizaciones_localizacion_id_foreign');
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
        Schema::dropIfExists('permisos_localizaciones');
    }
};
