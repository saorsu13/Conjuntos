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
        Schema::connection('mysql2')->table('document_types_document_fields', function (Blueprint $table) {
            $table->foreign(['document_field_id'], 'FK_document_types_document_fields_document_fields')->references(['document_field_id'])->on('document_fields')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['document_type_id'], 'FK_document_types_document_fields_document_types')->references(['document_type_id'])->on('document_types')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('document_types_document_fields', function (Blueprint $table) {
            $table->dropForeign('FK_document_types_document_fields_document_fields');
            $table->dropForeign('FK_document_types_document_fields_document_types');
        });
    }
};
