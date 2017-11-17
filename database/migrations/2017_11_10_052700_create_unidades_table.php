<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50)->unique();
            $table->string('direccion',100);
            $table->string('latitud', 5, 5);
            $table->float('longitud', 5, 5);
            $table->integer('telefono');
            $table->string('distrito',50);
            $table->string('region',50);

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
        Schema::dropIfExists('unidad');
    }
}
