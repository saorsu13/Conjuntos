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
        Schema::connection('mysql2')->create('document_positions', function (Blueprint $table) {
            $table->increments('document_position_id');
            $table->unsignedInteger('process_id')->index('document_positions_process_id_foreign');
            $table->unsignedInteger('location_id')->default(0)->index('FK_document_positions_locations');
            $table->string('code', 16);
            $table->unsignedInteger('position_edit_id');
            $table->unsignedInteger('position_review_id');
            $table->unsignedInteger('position_approve_id');
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
        Schema::connection('mysql2')->dropIfExists('document_positions');
    }
};
