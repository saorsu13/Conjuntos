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
        Schema::table('tenant_users', function (Blueprint $table) {
            $table->foreign(['tenant_id'], 'FK_tenant_users_tenants')->references(['tenant_id'])->on('tenants')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['user_id'], 'FK_tenant_users_users')->references(['user_id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tenant_users', function (Blueprint $table) {
            $table->dropForeign('FK_tenant_users_tenants');
            $table->dropForeign('FK_tenant_users_users');
        });
    }
};
