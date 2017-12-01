<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraDenunciantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_denunciante', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCarpeta')->unsigned();
            $table->integer('idVariablesPersona')->unsigned();
            $table->integer('idNotificacion')->unsigned()->index()->nullable();
            $table->integer('idAbogado')->unsigned()->index()->nullable();
            $table->boolean('conoceAlDenunciado')->default(false);
            $table->string('narracion',2000);
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('idCarpeta')->references('id')->on('carpeta')->onDelete('cascade');
            $table->foreign('idVariablesPersona')->references('id')->on('variables_persona')->onDelete('cascade');
            $table->foreign('idNotificacion')->references('id')->on('notificacion')->onDelete('cascade');
            $table->foreign('idAbogado')->references('id')->on('extra_abogado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extra_denunciante');
    }
}
