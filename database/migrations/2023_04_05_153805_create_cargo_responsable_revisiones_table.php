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
        Schema::create('cargo_responsable_revisiones', function (Blueprint $table) {
            $table->unsignedInteger('cargo_responsable_revision_id')->default(0)->primary();
            $table->integer('departamento')->default(0);
            $table->string('cargo_edita_id', 50)->default('0');
            $table->string('cargo_revisa_id');
            $table->string('cargo_aprueba_id');
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
        Schema::dropIfExists('cargo_responsable_revisiones');
    }
};
