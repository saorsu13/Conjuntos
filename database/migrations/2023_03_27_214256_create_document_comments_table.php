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
        Schema::connection('mysql2')->create('document_comments', function (Blueprint $table) {
            $table->comment('Tabla de comentarios de los contenidos');
            $table->increments('document_comment_id');
            $table->unsignedInteger('document_id')->index('document_comments_document_id_foreign');
            $table->tinyInteger('version')->default(1);
            $table->unsignedInteger('document_content_id')->index('FK_document_comments_document_contents');
            $table->unsignedInteger('user_id')->index('FK_document_comments_users');
            $table->string('action', 16);
            $table->text('comment');
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
        Schema::connection('mysql2')->dropIfExists('document_comments');
    }
};
