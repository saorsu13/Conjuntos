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
        Schema::create('documentos', function (Blueprint $table) {
            $table->unsignedInteger('documento_id')->default(0)->primary();
            $table->unsignedInteger('requisito_id')->default(0)->index('documentos_requisitos_foreign');
            $table->unsignedInteger('departamento_id')->default(0)->index('documentos_departamentos_foreign');
            $table->unsignedInteger('proceso_id')->default(0)->index('documentos_procesos_foreign');
            $table->unsignedInteger('tipo_documento_id')->default(0);
            $table->unsignedInteger('localizacion_id')->default(0);
            $table->string('codigo');
            $table->string('nombre');
            $table->string('version');
            $table->string('responsable_editar_id');
            $table->string('responsable_revisar_id');
            $table->string('responsable_aprobar_id');
            $table->string('etiqueta_id');
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
        Schema::dropIfExists('documentos');
    }
};
