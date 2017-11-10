<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraDenuncianteTable extends Migration
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
            $table->integer('idVatiablesPersona')->unsigned()->index()->nullable();
            $table->foreign('idVatiablesPersona')->references('id')->on('variables_persona')->ondelete('cascade');
            $table->integer('idNotificacion')->unsigned()->index()->nullable();
            $table->foreign('idNotificacion')->references('id')->on('notificaciones')->ondelete('cascade');
            $table->integer('idAbogado')->unsigned()->index()->nullable();
            $table->foreign('idAbogado')->references('id')->on('extra_abogado')->ondelete('cascade');
            $table->boolean('conoceAlDenuncuado')->default(false);
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
        Schema::dropIfExists('extra_denunciante');
    }
}
