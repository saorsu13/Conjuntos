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
        Schema::connection('mysql2')->create('location_position', function (Blueprint $table) {
            $table->comment('Relación entre localización y las posiciones');
            $table->increments('location_position_id');
            $table->unsignedInteger('location_id')->index('FK_location_department_locations');
            $table->unsignedInteger('position_id')->index('FK_location_department_departments');
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
        Schema::connection('mysql2')->dropIfExists('location_position');
    }
};
