<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTipifDelito')->unsigned();
            $table->enum('status', ['Robado', 'Involucrado'])->default('Robado');
            $table->string('placas', 50);
            $table->integer('idEstado')->unsigned();
            $table->string('marca', 50);
            $table->string('submarca', 50);
            $table->integer('modelo');
            $table->string('color', 50);
            $table->string('permiso', 50);
            $table->string('numSerie', 50);
            $table->string('numMotor', 50);
            $table->string('tipoVehiculo', 50);
            $table->string('tipoUso', 50);
            $table->string('senasPartic', 100);

            $table->foreign('idEstado')->references('id')->on('cat_estado')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculo');
    }
}
