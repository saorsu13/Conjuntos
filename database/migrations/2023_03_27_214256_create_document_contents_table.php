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
        Schema::connection('mysql2')->create('document_contents', function (Blueprint $table) {
            $table->increments('document_content_id');
            $table->unsignedInteger('document_id')->index('document_contents_document_id_foreign');
            $table->unsignedInteger('document_field_id')->index('document_contents_document_field_id_foreign');
            $table->unsignedTinyInteger('version');
            $table->text('content')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('document_contents');
    }
};
