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
        Schema::connection('mysql2')->table('documents', function (Blueprint $table) {
            $table->foreign(['document_type_id'], 'FK_documents_document_types')->references(['document_type_id'])->on('document_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['location_id'], 'FK_documents_locations')->references(['location_id'])->on('locations')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['process_id'], 'FK_documents_processes')->references(['process_id'])->on('processes')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('documents', function (Blueprint $table) {
            $table->dropForeign('FK_documents_document_types');
            $table->dropForeign('FK_documents_locations');
            $table->dropForeign('FK_documents_processes');
        });
    }
};
