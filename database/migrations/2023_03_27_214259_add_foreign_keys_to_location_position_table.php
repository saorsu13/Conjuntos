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
        Schema::connection('mysql2')->table('location_position', function (Blueprint $table) {
            $table->foreign(['location_id'], 'FK_location_position_locations')->references(['location_id'])->on('locations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['position_id'], 'FK_location_position_positions')->references(['position_id'])->on('positions')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('location_position', function (Blueprint $table) {
            $table->dropForeign('FK_location_position_locations');
            $table->dropForeign('FK_location_position_positions');
        });
    }
};
