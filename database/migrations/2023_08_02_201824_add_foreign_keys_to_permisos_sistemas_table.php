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
        Schema::table('permisos_sistemas', function (Blueprint $table) {
            $table->foreign(['requisito_id'], 'FK_permisos_sistemas_requisitos')->references(['requisito_id'])->on('requisitos')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['usuario_id'], 'FK_permisos_sistemas_usuarios')->references(['usuario_id'])->on('usuarios')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permisos_sistemas', function (Blueprint $table) {
            $table->dropForeign('FK_permisos_sistemas_requisitos');
            $table->dropForeign('FK_permisos_sistemas_usuarios');
        });
    }
};
