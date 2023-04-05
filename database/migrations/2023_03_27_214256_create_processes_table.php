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
        Schema::connection('mysql2')->create('processes', function (Blueprint $table) {
            $table->increments('process_id');
            $table->unsignedInteger('position_id')->default(0)->index('FK_processes_positions');
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->string('version', 24);
            $table->text('target');
            $table->text('requirement_client');
            $table->text('requirement_company');
            $table->text('requirement_legal');
            $table->text('sources');
            $table->text('risk_client');
            $table->text('risk_company');
            $table->text('risk_legal');
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
        Schema::connection('mysql2')->dropIfExists('processes');
    }
};
