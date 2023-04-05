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
        Schema::connection('mysql2')->create('process_permissions', function (Blueprint $table) {
            $table->comment('Relación de permisos para los procesos');
            $table->increments('process_permissions_id');
            $table->unsignedInteger('process_id')->index('FK_process_permissions_processes');
            $table->unsignedInteger('position_id')->index('FK_process_permissions_positions');
            $table->unsignedInteger('location_id')->default(0)->index('FK_process_permissions_locations');
            $table->unsignedTinyInteger('permission')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('process_permissions');
    }
};
