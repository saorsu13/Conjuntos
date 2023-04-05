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
        Schema::create('procesos', function (Blueprint $table) {
            $table->unsignedInteger('proceso_id')->default(0)->primary();
            $table->string('codigo');
            $table->string('nombre');
            $table->unsignedInteger('departamento_id')->index('procesos_departamento_id_foreign');
            $table->unsignedInteger('localizacion_id')->default(0)->index('procesos_localizacion_proceso_id_foreign');
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
        Schema::dropIfExists('procesos');
    }
};
