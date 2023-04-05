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
        Schema::create('tenant_databases', function (Blueprint $table) {
            $table->unsignedInteger('tenant_database_id')->primary();
            $table->unsignedInteger('tenant_id')->index('FK_tenant_databases_tenants');
            $table->string('driver');
            $table->integer('port');
            $table->string('hostname');
            $table->string('database_name');
            $table->string('user_name');
            $table->string('password');
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
        Schema::dropIfExists('tenant_databases');
    }
};
