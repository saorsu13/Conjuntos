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
        Schema::create('permisos_Localizaciones', function (Blueprint $table) {
            $table->increments('permisos_Localizaciones_id');
            $table->unsignedInteger('usuario_id')->index('permisos_Localizaciones_usuario_id_foreign');
            $table->unsignedInteger('localizacion_id')->index('permisos_Localizaciones_localizacion_id_foreign');
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
        Schema::dropIfExists('permisos_Localizaciones');
    }
};
