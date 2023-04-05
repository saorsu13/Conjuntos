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
        Schema::connection('mysql2')->create('document_permissions', function (Blueprint $table) {
            $table->comment('Listado particular de permisos por documento');
            $table->increments('document_permission_id');
            $table->unsignedInteger('document_id')->index('FK_document-permissions_documents');
            $table->unsignedInteger('location_id')->default(0)->index('FK_document_permissions_locations');
            $table->text('permissions');
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
        Schema::connection('mysql2')->dropIfExists('document_permissions');
    }
};
