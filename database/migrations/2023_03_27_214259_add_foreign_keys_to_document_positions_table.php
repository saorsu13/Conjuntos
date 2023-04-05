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
        Schema::connection('mysql2')->table('document_positions', function (Blueprint $table) {
            $table->foreign(['location_id'], 'FK_document_positions_locations')->references(['position_id'])->on('positions')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['process_id'], 'FK_document_positions_processes')->references(['process_id'])->on('processes')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('document_positions', function (Blueprint $table) {
            $table->dropForeign('FK_document_positions_locations');
            $table->dropForeign('FK_document_positions_processes');
        });
    }
};
