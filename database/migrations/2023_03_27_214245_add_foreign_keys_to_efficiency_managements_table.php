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
        Schema::table('efficiency_managements', function (Blueprint $table) {
            $table->foreign(['tenant_id'], 'FK_efficiency_managements_tenants')->references(['tenant_id'])->on('tenants')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('efficiency_managements', function (Blueprint $table) {
            $table->dropForeign('FK_efficiency_managements_tenants');
        });
    }
};
