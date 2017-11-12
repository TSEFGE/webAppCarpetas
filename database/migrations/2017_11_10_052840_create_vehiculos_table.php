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
            $table->integer('idMarca')->unsigned();
            $table->integer('idSubmarca')->unsigned();
            $table->integer('modelo');
            $table->string('nrpv', 50);
            $table->integer('idColor')->unsigned();
            $table->string('permiso', 50);
            $table->string('numSerie', 50);
            $table->string('numMotor', 50);
            $table->integer('idClaseVehiculo')->unsigned();
            $table->integer('idTipoVehiculo')->unsigned();
            $table->integer('idTipoUso')->unsigned();
            $table->string('senasPartic', 100);
            $table->integer('idProcedencia')->unsigned();
            $table->integer('idAseguradora')->unsigned();

            $table->foreign('idTipifDelito')->references('id')->on('tipif_delito')->onDelete('cascade');
            $table->foreign('idEstado')->references('id')->on('cat_estado')->onDelete('cascade');
            $table->foreign('idMarca')->references('id')->on('cat_marca')->onDelete('cascade');
            $table->foreign('idSubmarca')->references('id')->on('cat_submarca')->onDelete('cascade');
            $table->foreign('idColor')->references('id')->on('cat_color')->onDelete('cascade');
            $table->foreign('idClaseVehiculo')->references('id')->on('cat_clase_vehiculo')->onDelete('cascade');
            $table->foreign('idTipoVehiculo')->references('id')->on('cat_tipo_vehiculo')->onDelete('cascade');
            $table->foreign('idTipoUso')->references('id')->on('cat_tipo_uso')->onDelete('cascade');
            $table->foreign('idProcedencia')->references('id')->on('procedencia')->onDelete('cascade');
            $table->foreign('idAseguradora')->references('id')->on('aseguradora')->onDelete('cascade');

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
