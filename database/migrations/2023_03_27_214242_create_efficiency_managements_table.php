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
        Schema::create('efficiency_managements', function (Blueprint $table) {
            $table->comment('Almacenamiento de valores de eficiencia para los reportes de gestión con registro diario');
            $table->unsignedInteger('efficiency_managements_id')->primary();
            $table->unsignedInteger('tenant_id')->index('FK_efficiency_managements_tenants');
            $table->unsignedInteger('management_id');
            $table->text('data');
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
        Schema::dropIfExists('efficiency_managements');
    }
};
