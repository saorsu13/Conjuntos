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
        Schema::connection('mysql2')->table('document_validities_type', function (Blueprint $table) {
            $table->foreign(['document_type_id'], 'FK_document_validities_type_document_types')->references(['document_type_id'])->on('document_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('document_validities_type', function (Blueprint $table) {
            $table->dropForeign('FK_document_validities_type_document_types');
        });
    }
};
