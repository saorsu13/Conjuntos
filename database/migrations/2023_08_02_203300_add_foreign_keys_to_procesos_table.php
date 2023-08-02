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
        Schema::table('procesos', function (Blueprint $table) {
            $table->foreign(['departamento_id'], 'FK_procesos_departamentos')->references(['departamento_id'])->on('departamentos')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['localizacion_id'], 'FK_procesos_localizaciones')->references(['localizacion_id'])->on('localizaciones')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('procesos', function (Blueprint $table) {
            $table->dropForeign('FK_procesos_departamentos');
            $table->dropForeign('FK_procesos_localizaciones');
        });
    }
};
