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
        Schema::connection('mysql2')->create('document_forwards', function (Blueprint $table) {
            $table->comment('Relación de usuarios a quienes se les otorga la responsabilidad de editar el documento en proceso');
            $table->increments('document_forward_id');
            $table->unsignedInteger('document_id')->index('FK_document-forwards_documents');
            $table->unsignedInteger('user_id')->index('FK_document_forwards_users');
            $table->string('action', 16);
            $table->string('position');
            $table->dateTime('deadline');
            $table->unsignedTinyInteger('checked')->default(0);
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
        Schema::connection('mysql2')->dropIfExists('document_forwards');
    }
};
