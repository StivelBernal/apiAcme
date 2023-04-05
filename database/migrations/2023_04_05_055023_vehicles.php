<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('driver_id');
            $table->string('placa');
            $table->string('color');
            $table->enum("tipo", ["private", "public"]);//asistencia,retardo,falta
            $table->foreign("driver_id")
                ->references("id")
                ->on("persons")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->foreign("owner_id")
                ->references("id")
                ->on("persons")
                ->onDelete("cascade")
                ->onUpdate("cascade");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
