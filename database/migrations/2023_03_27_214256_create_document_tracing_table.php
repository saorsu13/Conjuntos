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
        Schema::connection('mysql2')->create('document_tracing', function (Blueprint $table) {
            $table->comment('Seguimiento de los documentos');
            $table->increments('id');
            $table->unsignedInteger('document_id')->default(0)->index('document_tracing_document_id_foreign');
            $table->unsignedInteger('user_id')->index('FK_document_tracing_users');
            $table->mediumText('trace');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
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
        Schema::connection('mysql2')->dropIfExists('document_tracing');
    }
};
