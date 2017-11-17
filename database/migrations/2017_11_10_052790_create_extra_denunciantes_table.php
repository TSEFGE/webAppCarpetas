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
            $table->integer('idVatiablesPersona')->unsigned();
            $table->integer('idNotificacion')->unsigned()->index()->nullable();
            $table->integer('idAbogado')->unsigned()->index()->nullable();
            $table->boolean('conoceAlDenuncuado')->default(false);
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('idVatiablesPersona')->references('id')->on('variables_persona')->onDelete('cascade');
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
