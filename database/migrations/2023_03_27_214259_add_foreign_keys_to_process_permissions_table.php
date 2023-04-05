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
        Schema::connection('mysql2')->table('process_permissions', function (Blueprint $table) {
            $table->foreign(['location_id'], 'FK_process_permissions_locations')->references(['location_id'])->on('locations')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['position_id'], 'FK_process_permissions_positions')->references(['position_id'])->on('positions')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['process_id'], 'FK_process_permissions_processes')->references(['process_id'])->on('processes')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('process_permissions', function (Blueprint $table) {
            $table->dropForeign('FK_process_permissions_locations');
            $table->dropForeign('FK_process_permissions_positions');
            $table->dropForeign('FK_process_permissions_processes');
        });
    }
};
