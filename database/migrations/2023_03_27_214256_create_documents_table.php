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
        Schema::connection('mysql2')->create('documents', function (Blueprint $table) {
            $table->increments('document_id');
            $table->unsignedInteger('system_id');
            $table->unsignedInteger('process_id')->index('documents_process_id_foreign');
            $table->unsignedInteger('document_type_id')->index('FK_documents_document_types');
            $table->unsignedInteger('location_id')->index('FK_documents_locations');
            $table->string('code', 48);
            $table->unsignedSmallInteger('serial')->default(1);
            $table->string('name');
            $table->string('filename')->nullable();
            $table->unsignedTinyInteger('version');
            $table->unsignedInteger('position_edit_id');
            $table->unsignedInteger('position_review_id');
            $table->unsignedInteger('position_approve_id');
            $table->mediumText('settings')->nullable();
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
        Schema::connection('mysql2')->dropIfExists('documents');
    }
};
