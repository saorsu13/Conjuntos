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
        Schema::connection('mysql2')->create('document_standby', function (Blueprint $table) {
            $table->comment('Listado de documentos pendientes o en espera');
            $table->increments('document_standby_id');
            $table->unsignedInteger('document_id')->index('FK_document-standby_documents');
            $table->unsignedInteger('user_id')->index('FK_document_stanby_users');
            $table->string('status', 16);
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
        Schema::connection('mysql2')->dropIfExists('document_standby');
    }
};
