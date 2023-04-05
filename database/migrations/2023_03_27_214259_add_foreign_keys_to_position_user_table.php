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
        Schema::connection('mysql2')->table('position_user', function (Blueprint $table) {
            $table->foreign(['position_id'], 'FK_position_user_positions')->references(['position_id'])->on('positions')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['user_id'], 'FK_position_user_users')->references(['user_id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('position_user', function (Blueprint $table) {
            $table->dropForeign('FK_position_user_positions');
            $table->dropForeign('FK_position_user_users');
        });
    }
};
