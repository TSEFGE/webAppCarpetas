<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatCodigoPostalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_codigo_postal', function (Blueprint $table) {
            $table->increments('id');         
            $table->integer('idMunicipio')->unsigned()->index()->nullable();
            $table->foreign('idMunicipio')->references('id')->on('cat_municipio');
            $table->integer('codigo');
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
        Schema::dropIfExists('cat_codigo_postal');
    }
}
