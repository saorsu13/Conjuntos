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
        Schema::connection('mysql2')->create('document_authorizations', function (Blueprint $table) {
            $table->comment('Autorizaciones específicas de usuarios con sus documentos');
            $table->increments('document_authorization_id');
            $table->unsignedInteger('document_id')->index('FK_document-authorizations_documents')->comment('Identificador del documento');
            $table->unsignedInteger('user_id')->index('FK_document_authorizations_users')->comment('Identificardor del usuario');
            $table->unsignedInteger('authorization')->default(1);
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
        Schema::connection('mysql2')->dropIfExists('document_authorizations');
    }
};
