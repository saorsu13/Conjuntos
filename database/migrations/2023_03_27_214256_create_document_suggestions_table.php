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
        Schema::connection('mysql2')->create('document_suggestions', function (Blueprint $table) {
            $table->comment('Listado de sugerencias para  nuevo documentos a crear');
            $table->increments('document_suggestion_id');
            $table->unsignedInteger('user_id')->index('FK_document_suggestions_users');
            $table->unsignedInteger('system_id');
            $table->string('document');
            $table->text('justification');
            $table->string('name')->nullable();
            $table->string('filename')->nullable();
            $table->string('mimetype', 128)->nullable();
            $table->integer('size')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::connection('mysql2')->dropIfExists('document_suggestions');
    }
};
