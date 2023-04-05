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
        Schema::create('cargos', function (Blueprint $table) {
            $table->unsignedInteger('cargo_id')->default(0)->primary();
            $table->integer('id_departamento')->default(0);
            $table->text('cargo_precedente');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('localizacion_dpto');
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
        Schema::dropIfExists('cargos');
    }
};
