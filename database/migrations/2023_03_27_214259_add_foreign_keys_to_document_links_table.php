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
        Schema::connection('mysql2')->table('document_links', function (Blueprint $table) {
            $table->foreign(['document_id'], 'FK_document_links_documents')->references(['document_id'])->on('documents')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['document_content_id'], 'FK_document_links_document_contents')->references(['document_content_id'])->on('document_contents')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('document_links', function (Blueprint $table) {
            $table->dropForeign('FK_document_links_documents');
            $table->dropForeign('FK_document_links_document_contents');
        });
    }
};
