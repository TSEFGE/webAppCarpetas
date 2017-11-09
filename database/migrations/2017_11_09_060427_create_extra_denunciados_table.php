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
            $table->string('alias', 30);
            $table->string('senasPartic', 100);
            $table->integer('ingreso');
            $table->enum('sexo', ['Semanal', 'Quincenal', 'Mensual'])->default('Mensual');
            $table->string('residenciaAnterior', 100);
            $table->integer('personasBajoSuGuarda');
            $table->boolean('perseguidoPenalmente');

            $table->foreign('idVariablesPersona')->references('id')->on('variables_persona')->onDelete('cascade');
            $table->foreign('idNotificacion')->references('id')->on('notificacion')->onDelete('cascade');

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
