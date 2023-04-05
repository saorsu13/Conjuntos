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
        Schema::connection('mysql2')->create('document_records', function (Blueprint $table) {
            $table->comment('Relación de documentos tipo registro');
            $table->increments('document_record_id');
            $table->unsignedInteger('document_id')->index('FK_document-records_documents');
            $table->string('name');
            $table->text('content')->nullable();
            $table->unsignedInteger('author_id');
            $table->string('author_name');
            $table->string('author_position')->nullable();
            $table->string('filename')->nullable();
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
        Schema::connection('mysql2')->dropIfExists('document_records');
    }
};
