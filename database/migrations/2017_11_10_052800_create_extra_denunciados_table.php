<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraDenunciadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_denunciado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idVariablesPersona')->unsigned();
            $table->integer('idNotificacion')->unsigned();
            $table->integer('idPuesto')->unsigned();
            $table->string('alias', 50);
            $table->string('senasPartic', 150);
            $table->integer('ingreso');
            $table->string('periodoIngreso', 20);
            $table->string('residenciaAnterior', 100);
            $table->integer('idAbogado')->unsigned()->nullable();
            $table->integer('personasBajoSuGuarda');
            $table->boolean('perseguidoPenalmente')->default(false);
            $table->string('vestimenta', 150);

            $table->foreign('idVariablesPersona')->references('id')->on('variables_persona')->onDelete('cascade');
            $table->foreign('idNotificacion')->references('id')->on('notificacion')->onDelete('cascade');
            $table->foreign('idPuesto')->references('id')->on('cat_puesto')->onDelete('cascade');
            $table->foreign('idAbogado')->references('id')->on('extra_abogado')->onDelete('cascade');

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
        Schema::dropIfExists('extra_denunciado');
    }
}
