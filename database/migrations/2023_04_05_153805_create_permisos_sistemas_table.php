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
            $table->unsignedInteger('permiso_sistema_id')->default(0)->primary();
            $table->unsignedInteger('usuario_id')->default(0)->index('permisos_sistemas_usuario_id_foreign');
            $table->unsignedInteger('requisito_id')->default(0)->index('permisos_sistemas_requisito_id_foreign');
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
