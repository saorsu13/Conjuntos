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
        Schema::connection('mysql2')->create('position_user', function (Blueprint $table) {
            $table->increments('position_user_id');
            $table->unsignedInteger('user_id')->index('position_user_user_id_foreign');
            $table->unsignedInteger('position_id')->index('position_user_position_id_foreign');
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
        Schema::connection('mysql2')->dropIfExists('position_user');
    }
};
