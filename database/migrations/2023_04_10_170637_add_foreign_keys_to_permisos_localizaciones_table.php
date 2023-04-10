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
        Schema::table('permisos_localizaciones', function (Blueprint $table) {
            $table->foreign(['localizacion_id'], 'FK_permisos_localizaciones_localizaciones')->references(['localizacion_id'])->on('localizaciones')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['usuario_id'], 'FK_permisos_localizaciones_usuarios')->references(['usuario_id'])->on('usuarios')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permisos_localizaciones', function (Blueprint $table) {
            $table->dropForeign('FK_permisos_localizaciones_localizaciones');
            $table->dropForeign('FK_permisos_localizaciones_usuarios');
        });
    }
};
