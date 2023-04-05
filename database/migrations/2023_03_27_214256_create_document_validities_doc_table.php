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
        Schema::connection('mysql2')->create('document_validities_doc', function (Blueprint $table) {
            $table->comment('Listado particular de permisos por documento');
            $table->increments('document_validity_id');
            $table->unsignedInteger('document_id')->index('FK_document-validities_documents');
            $table->smallInteger('expiration_value');
            $table->string('expiration_text', 16);
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
        Schema::connection('mysql2')->dropIfExists('document_validities_doc');
    }
};
