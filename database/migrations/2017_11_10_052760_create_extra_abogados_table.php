<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraAbogadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_abogado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idVatiablesPersona')->unsigned()->index()->nullable();
            $table->foreign('idVatiablesPersona')->references('id')->on('variables_persona')->ondelete('cascade');
            $table->string('cedulaProf',50);
            $table->string('sector',50);
            $table->string('correo',50);
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
        Schema::dropIfExists('extra_abogado');
    }
}
