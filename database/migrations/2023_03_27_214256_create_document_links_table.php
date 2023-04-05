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
        Schema::connection('mysql2')->create('document_links', function (Blueprint $table) {
            $table->comment('Listado de enlaces de los archivos asociados al contenido de los documentos');
            $table->increments('document_link_id');
            $table->unsignedInteger('document_id')->default(0)->index('document_links_document_id_foreign');
            $table->unsignedTinyInteger('version')->default(0);
            $table->unsignedInteger('document_content_id')->default(0)->index('FK_document_links_document_contents');
            $table->string('name')->default('0');
            $table->string('link')->default('0');
            $table->string('type', 64)->default('0');
            $table->string('size', 12)->default('0');
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
        Schema::connection('mysql2')->dropIfExists('document_links');
    }
};
