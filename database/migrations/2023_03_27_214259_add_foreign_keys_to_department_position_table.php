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
        Schema::connection('mysql2')->table('department_position', function (Blueprint $table) {
            $table->foreign(['department_id'], 'FK_department_position_departments')->references(['department_id'])->on('departments')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['position_id'], 'FK_department_position_positions')->references(['position_id'])->on('positions')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('department_position', function (Blueprint $table) {
            $table->dropForeign('FK_department_position_departments');
            $table->dropForeign('FK_department_position_positions');
        });
    }
};
