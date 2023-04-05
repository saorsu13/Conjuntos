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
        Schema::connection('mysql2')->table('document_changes', function (Blueprint $table) {
            $table->foreign(['document_id'], 'FK_document_changes_documents')->references(['document_id'])->on('documents')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['document_content_id'], 'FK_document_changes_document_contents')->references(['document_content_id'])->on('document_contents')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['user_id'], 'FK_document_changes_users')->references(['user_id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('document_changes', function (Blueprint $table) {
            $table->dropForeign('FK_document_changes_documents');
            $table->dropForeign('FK_document_changes_document_contents');
            $table->dropForeign('FK_document_changes_users');
        });
    }
};
