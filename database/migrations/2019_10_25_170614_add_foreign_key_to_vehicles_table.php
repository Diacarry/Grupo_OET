<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('fk_owners')->after('license_plate');
            $table->foreign('fk_owners')->references('identification')->on('owners');

            $table->string('fk_driver')->after('fk_owners');
            $table->foreign('fk_driver')->references('identification')->on('drivers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropForeign('owners_identification_foreign');
            $table->dropForeign('drivers_identification_foreign');
        });
    }
}
