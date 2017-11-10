<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcusacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acusacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCarpeta')->unsigned()->index()->nullable();
            $table->foreign('idCarpeta')->references('id')->on('carpeta');
            $table->integer('idDenunciante')->unsigned()->index()->nullable();
            $table->foreign('idDenunciante')->references('id')->on('extra_denunciante')->ondelete('cascade');
            $table->integer('idTipifDelito')->unsigned()->index()->nullable();
            $table->foreign('idTipifDelito')->references('id')->on('tipif_delito')->ondelete('cascade');
            $table->integer('idDenunciado')->unsigned()->index()->nullable();
            $table->foreign('idDenunciado')->references('id')->on('extra_denunciado')->ondelete('cascade');
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
        Schema::dropIfExists('acusacion');
    }
}
