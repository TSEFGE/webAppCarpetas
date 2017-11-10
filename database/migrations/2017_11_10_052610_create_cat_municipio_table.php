<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatMunicipioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_municipio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->integer('idEstado')->unsigned()->index()->nullable();
            $table->foreign('idEstado')->references('id')->on('cat_estado')->ondelete('cascade');
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
        Schema::dropIfExists('cat_municipio');
    }
}
