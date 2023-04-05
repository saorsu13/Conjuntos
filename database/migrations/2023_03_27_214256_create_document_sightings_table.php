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
        Schema::connection('mysql2')->create('document_sightings', function (Blueprint $table) {
            $table->comment('Observaciones  para los documentos creados');
            $table->increments('document_sighting_id');
            $table->unsignedInteger('document_id')->index('FK_document-sightings_documents');
            $table->unsignedInteger('user_id')->index('FK_document_sightings_users');
            $table->string('type', 16)->nullable();
            $table->dateTime('date');
            $table->char('page', 4);
            $table->string('section', 50);
            $table->text('content');
            $table->unsignedTinyInteger('status')->default(0);
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
        Schema::connection('mysql2')->dropIfExists('document_sightings');
    }
};
