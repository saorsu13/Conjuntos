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
            $table->unsignedInteger('permisos_localizaciones_id')->default(0)->primary();
            $table->unsignedInteger('usuario_id')->default(0)->index('permisos_localizaciones_usuario_id_foreign');
            $table->unsignedInteger('localizacion_id')->default(0)->index('permisos_localizaciones_localizacion_id_foreign');
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
