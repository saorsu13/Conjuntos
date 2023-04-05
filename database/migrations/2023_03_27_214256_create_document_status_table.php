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
        Schema::connection('mysql2')->create('document_status', function (Blueprint $table) {
            $table->increments('document_status_id');
            $table->unsignedInteger('document_id')->index('document_status_document_id_foreign');
            $table->string('action', 16);
            $table->timestamp('action_date')->useCurrent();
            $table->string('action_by', 50);
            $table->timestamp('delivery_date')->nullable();
            $table->timestamp('return_date')->useCurrent();
            $table->string('return_by', 50)->nullable();
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
        Schema::connection('mysql2')->dropIfExists('document_status');
    }
};
