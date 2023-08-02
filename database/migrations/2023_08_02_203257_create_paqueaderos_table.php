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
        Schema::create('paqueaderos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('numero_parqueadero')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('id_propietario')->nullable()->index('id_propietario');
            $table->integer('id_vehiculo')->nullable()->index('id_vehiculo');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paqueaderos');
    }
};
