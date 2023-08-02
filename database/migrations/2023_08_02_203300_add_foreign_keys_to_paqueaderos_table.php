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
        Schema::table('paqueaderos', function (Blueprint $table) {
            $table->foreign(['id_propietario'], 'paqueaderos_ibfk_1')->references(['id'])->on('personas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_vehiculo'], 'paqueaderos_ibfk_2')->references(['id'])->on('vehiculos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paqueaderos', function (Blueprint $table) {
            $table->dropForeign('paqueaderos_ibfk_1');
            $table->dropForeign('paqueaderos_ibfk_2');
        });
    }
};
