<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatColoniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_colonia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCodigoPostal')->unsigned();
            $table->string('nombre', 50);

            $table->foreign('idCodigoPostal')->references('id')->on('cat_codigo_postal')->onDelete('cascade');

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
        Schema::dropIfExists('cat_colonia');
    }
}
