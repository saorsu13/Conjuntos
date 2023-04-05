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
        Schema::connection('mysql2')->table('document_standby', function (Blueprint $table) {
            $table->foreign(['user_id'], 'FK_document_stanby_users')->references(['user_id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['document_id'], 'FK_document_standby_documents')->references(['document_id'])->on('documents')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('document_standby', function (Blueprint $table) {
            $table->dropForeign('FK_document_stanby_users');
            $table->dropForeign('FK_document_standby_documents');
        });
    }
};
