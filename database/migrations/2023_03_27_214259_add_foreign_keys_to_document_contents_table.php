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
        Schema::connection('mysql2')->table('document_contents', function (Blueprint $table) {
            $table->foreign(['document_id'], 'FK_document_contents_documents')->references(['document_id'])->on('documents')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['document_field_id'], 'FK_document_contents_document_fields')->references(['document_field_id'])->on('document_fields')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('document_contents', function (Blueprint $table) {
            $table->dropForeign('FK_document_contents_documents');
            $table->dropForeign('FK_document_contents_document_fields');
        });
    }
};
