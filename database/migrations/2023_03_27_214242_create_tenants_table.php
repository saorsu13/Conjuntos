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
        Schema::create('tenants', function (Blueprint $table) {
            $table->unsignedInteger('tenant_id')->primary();
            $table->string('tenant_uid', 50)->unique();
            $table->string('company_name')->unique();
            $table->string('short_company_name');
            $table->string('database_prefix')->unique();
            $table->string('address');
            $table->string('vat');
            $table->string('phone');
            $table->string('website');
            $table->text('options');
            $table->tinyInteger('active');
            $table->longText('data')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
};
