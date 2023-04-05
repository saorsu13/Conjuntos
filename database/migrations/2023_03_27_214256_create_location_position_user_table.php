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
        Schema::connection('mysql2')->create('location_position_user', function (Blueprint $table) {
            $table->comment('Relación de los usuarios con las localizaciones');
            $table->increments('location_position_user_id');
            $table->unsignedInteger('user_id')->index('position_user_user_id_foreign')->comment('id del usuario');
            $table->unsignedInteger('position_id')->index('position_user_position_id_foreign')->comment('id del cargo');
            $table->unsignedInteger('location_id')->index('FK_location_position_user_locations')->comment('id de la localización');
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
        Schema::connection('mysql2')->dropIfExists('location_position_user');
    }
};
