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
        Schema::create('permisos_sistemas', function (Blueprint $table) {
            $table->increments('permiso_sistema_id');
            $table->unsignedInteger('usuario_id')->index('permisos_sistemas_usuario_id_foreign');
            $table->unsignedInteger('requisito_id')->index('permisos_sistemas_requisito_id_foreign');
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
        Schema::dropIfExists('permisos_sistemas');
    }
};
