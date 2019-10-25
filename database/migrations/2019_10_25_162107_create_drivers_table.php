<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->string('identification', 25); /* cedula */
            $table->timestamps();
            
            $table->string('first_name', 50); /* primer_nombre */
            $table->string('second_name', 50); /* segundo_nombre */
            $table->string('last_name', 100); /* apellidos */
            $table->string('address'); /* direccion */
            $table->string('phone'); /* telefono */
            $table->string('city'); /* ciudad */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
