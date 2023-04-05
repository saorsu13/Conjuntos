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
        Schema::table('documentos', function (Blueprint $table) {
            $table->foreign(['departamento_id'], 'FK_documentos_departamentos')->references(['departamentos_id'])->on('departamentos')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['proceso_id'], 'FK_documentos_procesos')->references(['proceso_id'])->on('procesos')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['requisito_id'], 'FK_documentos_requisitos')->references(['requisito_id'])->on('requisitos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documentos', function (Blueprint $table) {
            $table->dropForeign('FK_documentos_departamentos');
            $table->dropForeign('FK_documentos_procesos');
            $table->dropForeign('FK_documentos_requisitos');
        });
    }
};
