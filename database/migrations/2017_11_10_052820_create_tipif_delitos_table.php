<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipifDelitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipif_delito', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCarpeta')->unsigned()->index()->nullable();
            $table->foreign('idCarpeta')->references('id')->on('carpeta')->ondelete('cascade');
            $table->integer('idDelito')->unsigned()->index()->nullable();
            $table->foreign('idDelito')->references('id')->on('cat_delito')->ondelete('cascade');
            $table->integer('idCarpeta')->unsigned()->index()->nullable();
            $table->boolean('conViolencia')->default(false);
            $table->string('medioUtilizado',100);
            $table->string('modalidad',100);
            $table->string('formaComision',100);
            $table->string('consumacion',100);
            $table->date('fecha');
            $table->dateTime('hora');
            $table->integer('idDomicilio')->unsigned()->index()->nullable();
            $table->foreign('idDomicilio')->references('id')->on('domicilio')->ondelete('cascade');
            $table->integer('idZona')->unsigned()->index()->nullable();
            $table->foreign('idZona')->references('id')->on('cat_zona')->ondelete('cascade');
            $table->string('lugar',100);
            $table->string('entreCalle',100);
            $table->string('yCalle',100);
            $table->string('calleTrasera',100);
            $table->string('puntaReferencia',100);

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
        Schema::dropIfExists('tipif_delito');
    }
}
