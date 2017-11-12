<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarpetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carpeta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUnidad')->unsigned()->index()->nullable();
            $table->foreign('idUnidad')->references('id')->on('unidad');
            $table->integer('idFiscal')->unsigned()->index()->nullable();
            $table->foreign('idFiscal')->references('id')->on('fiscal')->ondelete('cascade');
            $table->integer('numCarpeta');
            $table->date('fechaInicio');
            $table->boolean('conDetenido')->default(false);
            $table->boolean('esRelevante')->default(false);
            $table->string('estadoCarpeta',25);
            $table->dateTime('horaIntervencion');
            $table->string('descripcionHechos',500);
            $table->string('horaIntervencion');
            $table->date('fechaDeterminacion');
            $table->string('tipoDeterminacion',50);
            $table->string('npd',50);
            $table->string('numIph',50);
            $table->date('fechaIph',50);
            $table->string('narracionIph',200);
            
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
        Schema::dropIfExists('carpeta');
    }
}
