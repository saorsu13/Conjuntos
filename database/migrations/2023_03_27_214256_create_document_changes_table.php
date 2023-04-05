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
        Schema::connection('mysql2')->create('document_changes', function (Blueprint $table) {
            $table->comment('Registro de control de cambios en las versiones de documentos');
            $table->increments('document_change_id');
            $table->unsignedInteger('document_id')->index('FK_document-changes_documents');
            $table->unsignedInteger('user_id')->index('FK_document_changes_users');
            $table->unsignedTinyInteger('version');
            $table->unsignedInteger('document_content_id')->index('FK_document_changes_document_contents');
            $table->text('text');
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
        Schema::connection('mysql2')->dropIfExists('document_changes');
    }
};
