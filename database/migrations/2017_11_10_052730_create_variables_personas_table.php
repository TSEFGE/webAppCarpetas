<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariablesPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variables_persona', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPersona')->unsigned();
            $table->integer('edad');
            $table->string('telefono',15);
            $table->string('motivoEstancia',200);
            $table->integer('idOcupacion')->unsigned();
            $table->integer('idEstadoCivil')->unsigned();
            $table->integer('idEscolaridad')->unsigned();
            $table->integer('idReligion')->unsigned();
            $table->integer('idDomicilio')->unsigned();
            $table->string('docIdentificacion',50);
            $table->string('numDocIdentificacion',50);
            $table->string('lugarTrabajo',50);
            $table->integer('idDomicilioTrabajo')->unsigned();
            $table->string('telefonoTrabajo',15);
            $table->string('representanteLegal',100)->default('NO APLICA');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('idPersona')->references('id')->on('persona')->onDelete('cascade');
            $table->foreign('idOcupacion')->references('id')->on('cat_ocupacion')->onDelete('cascade');
            $table->foreign('idEstadoCivil')->references('id')->on('cat_estado_civil')->onDelete('cascade');
            $table->foreign('idEscolaridad')->references('id')->on('cat_escolaridad')->onDelete('cascade');
            $table->foreign('idReligion')->references('id')->on('cat_religion')->onDelete('cascade');
            $table->foreign('idDomicilio')->references('id')->on('domicilio')->onDelete('cascade');
            $table->foreign('idDomicilioTrabajo')->references('id')->on('domicilio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variables_persona');
    }
}
