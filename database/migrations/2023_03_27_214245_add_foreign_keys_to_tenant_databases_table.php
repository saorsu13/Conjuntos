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
        Schema::table('tenant_databases', function (Blueprint $table) {
            $table->foreign(['tenant_id'], 'FK_tenant_databases_tenants')->references(['tenant_id'])->on('tenants')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tenant_databases', function (Blueprint $table) {
            $table->dropForeign('FK_tenant_databases_tenants');
        });
    }
};
